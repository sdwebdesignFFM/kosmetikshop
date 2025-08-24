<?php

namespace Webkul\Admin\Http\Controllers\B2B;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Admin\DataGrids\B2BApprovalDataGrid;

class B2BApprovalController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected CustomerRepository $customerRepository
    ) {}

    /**
     * Display the B2B approval management page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return datagrid(B2BApprovalDataGrid::class)->process();
        }

        return view('admin.b2b.approvals.index');
    }


    /**
     * Approve a B2B customer
     *
     * @param int $customerId
     * @return JsonResponse
     */
    public function approve(int $customerId): JsonResponse
    {
        try {
            $customer = $this->customerRepository->findOrFail($customerId);
            
            if ($customer->approval_status !== 'pending') {
                return response()->json([
                    'message' => 'Kunde kann nicht genehmigt werden (Status: ' . $customer->approval_status . ')',
                ], 400);
            }

            // Update customer status
            $customer->update([
                'approval_status' => 'approved',
                'approved_at' => now(),
                'approved_by' => auth()->guard('admin')->id(),
            ]);

            // Send approval email
            Mail::to($customer->email)->send(new \App\Mail\B2BApprovalNotification($customer));

            return response()->json([
                'message' => 'Kunde wurde erfolgreich für B2B freigeschaltet',
                'status' => 'success'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Fehler beim Freischalten: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Reject a B2B customer
     *
     * @param int $customerId
     * @return JsonResponse
     */
    public function reject(int $customerId): JsonResponse
    {
        try {
            $customer = $this->customerRepository->findOrFail($customerId);
            
            if ($customer->approval_status !== 'pending') {
                return response()->json([
                    'message' => 'Kunde kann nicht abgelehnt werden (Status: ' . $customer->approval_status . ')',
                ], 400);
            }

            // Update customer status
            $customer->update([
                'approval_status' => 'rejected',
                'approved_at' => now(),
                'approved_by' => auth()->guard('admin')->id(),
            ]);

            // Send rejection email
            Mail::to($customer->email)->send(new \App\Mail\B2BRejectionNotification($customer));

            return response()->json([
                'message' => 'B2B-Antrag wurde abgelehnt',
                'status' => 'success'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Fehler beim Ablehnen: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Reset customer approval status back to pending
     *
     * @param int $customerId
     * @return JsonResponse
     */
    public function reset(int $customerId): JsonResponse
    {
        try {
            $customer = $this->customerRepository->findOrFail($customerId);

            // Update customer status
            $customer->update([
                'approval_status' => 'pending',
                'approved_at' => null,
                'approved_by' => null,
            ]);

            return response()->json([
                'message' => 'B2B-Status wurde zurückgesetzt',
                'status' => 'success'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Fehler beim Zurücksetzen: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Download business document
     *
     * @param int $customerId
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadDocument(int $customerId)
    {
        try {
            // Ensure admin is authenticated and has permission
            if (!auth()->guard('admin')->check()) {
                return response()->json(['message' => 'Nicht autorisiert'], 401);
            }

            if (!bouncer()->hasPermission('customers.customers.view')) {
                return response()->json(['message' => 'Keine Berechtigung'], 403);
            }

            $customer = $this->customerRepository->findOrFail($customerId);
            
            if (!$customer->business_document) {
                return response()->json(['message' => 'Kein Dokument verfügbar'], 404);
            }

            // Check both private and public storage paths for backward compatibility
            $privateFilePath = storage_path('app/' . $customer->business_document);
            $publicFilePath = storage_path('app/public/' . $customer->business_document);
            
            $filePath = null;
            if (file_exists($privateFilePath)) {
                $filePath = $privateFilePath;
            } elseif (file_exists($publicFilePath)) {
                $filePath = $publicFilePath;
                
                // Optional: Move file to private storage for better security
                $newPrivateDir = dirname($privateFilePath);
                if (!file_exists($newPrivateDir)) {
                    mkdir($newPrivateDir, 0755, true);
                }
                copy($publicFilePath, $privateFilePath);
                $filePath = $privateFilePath;
                
                \Log::info('Business document moved from public to private storage', [
                    'customer_id' => $customerId,
                    'old_path' => $publicFilePath,
                    'new_path' => $privateFilePath
                ]);
            }
            
            if (!$filePath || !file_exists($filePath)) {
                return response()->json(['message' => 'Datei nicht gefunden'], 404);
            }

            // Secure filename generation
            $originalExtension = pathinfo($customer->business_document, PATHINFO_EXTENSION);
            $secureFilename = 'gewerbeschein_' . $customer->id . '_' . hash('sha256', $customer->business_document) . '.' . $originalExtension;

            // Log access for audit trail
            \Log::info('Business document accessed', [
                'admin_id' => auth()->guard('admin')->id(),
                'customer_id' => $customerId,
                'file_path' => $customer->business_document,
                'timestamp' => now(),
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent()
            ]);

            return response()->download($filePath, $secureFilename);

        } catch (\Exception $e) {
            \Log::error('Business document download error', [
                'customer_id' => $customerId,
                'error' => $e->getMessage(),
                'admin_id' => auth()->guard('admin')->id() ?? 'not_authenticated'
            ]);

            return response()->json([
                'message' => 'Fehler beim Download: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Delete business document for security or GDPR compliance
     *
     * @param int $customerId
     * @return JsonResponse
     */
    public function deleteDocument(int $customerId): JsonResponse
    {
        try {
            // Ensure admin is authenticated and has permission
            if (!auth()->guard('admin')->check()) {
                return response()->json(['message' => 'Nicht autorisiert'], 401);
            }

            // Use same permission as for other B2B operations
            if (!bouncer()->hasPermission('customers.customers.view')) {
                return response()->json(['message' => 'Keine Berechtigung'], 403);
            }

            $customer = $this->customerRepository->findOrFail($customerId);
            
            if (!$customer->business_document) {
                return response()->json(['message' => 'Kein Dokument vorhanden'], 404);
            }

            // Check both private and public storage paths for backward compatibility
            $privateFilePath = storage_path('app/' . $customer->business_document);
            $publicFilePath = storage_path('app/public/' . $customer->business_document);
            
            $filePath = null;
            if (file_exists($privateFilePath)) {
                $filePath = $privateFilePath;
            } elseif (file_exists($publicFilePath)) {
                $filePath = $publicFilePath;
            }
            
            // DSGVO-compliant: Complete deletion without backup
            if ($filePath && file_exists($filePath)) {
                // Delete file permanently - no backup for GDPR compliance
                unlink($filePath);
                
                \Log::info('Business document permanently deleted (GDPR compliance)', [
                    'customer_id' => $customerId,
                    'file_path' => $filePath,
                    'admin_id' => auth()->guard('admin')->id(),
                    'deletion_complete' => true
                ]);
            }

            // Update database with deletion information
            $customer->update([
                'business_document' => null,
                'document_deleted' => true,
                'document_deleted_at' => now(),
                'document_deleted_by' => auth()->guard('admin')->id(),
                'document_deletion_reason' => 'Admin manual deletion'
            ]);

            // Log deletion for audit trail
            \Log::warning('Business document deleted', [
                'admin_id' => auth()->guard('admin')->id(),
                'customer_id' => $customerId,
                'deleted_file_path' => $customer->business_document,
                'timestamp' => now(),
                'ip_address' => request()->ip(),
                'reason' => 'Admin deletion request',
                'gdpr_compliant_deletion' => true
            ]);

            return response()->json([
                'message' => 'Dokument erfolgreich gelöscht',
                'status' => 'success'
            ]);

        } catch (\Exception $e) {
            \Log::error('Business document deletion error', [
                'customer_id' => $customerId,
                'error' => $e->getMessage(),
                'admin_id' => auth()->guard('admin')->id() ?? 'not_authenticated'
            ]);

            return response()->json([
                'message' => 'Fehler beim Löschen: ' . $e->getMessage(),
            ], 500);
        }
    }
}