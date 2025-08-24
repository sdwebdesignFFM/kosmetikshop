<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Move existing business documents from public to private storage for security
        $customers = DB::table('customers')
            ->whereNotNull('business_document')
            ->get();

        foreach ($customers as $customer) {
            $publicPath = 'public/' . $customer->business_document;
            $privatePath = $customer->business_document;
            
            // Check if file exists in public storage
            if (Storage::exists($publicPath)) {
                // Ensure private directory exists
                $privateDir = dirname($privatePath);
                if (!Storage::exists($privateDir)) {
                    Storage::makeDirectory($privateDir);
                }
                
                // Move file from public to private storage
                if (Storage::copy($publicPath, $privatePath)) {
                    // File successfully copied to private storage
                    // Delete from public storage for security
                    Storage::delete($publicPath);
                    
                    \Log::info('Business document moved to private storage during migration', [
                        'customer_id' => $customer->id,
                        'old_path' => $publicPath,
                        'new_path' => $privatePath
                    ]);
                } else {
                    \Log::error('Failed to move business document to private storage', [
                        'customer_id' => $customer->id,
                        'path' => $publicPath
                    ]);
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Move documents back to public storage (not recommended for security)
        $customers = DB::table('customers')
            ->whereNotNull('business_document')
            ->get();

        foreach ($customers as $customer) {
            $privatePath = $customer->business_document;
            $publicPath = 'public/' . $customer->business_document;
            
            // Check if file exists in private storage
            if (Storage::exists($privatePath)) {
                // Ensure public directory exists
                $publicDir = dirname($publicPath);
                if (!Storage::exists($publicDir)) {
                    Storage::makeDirectory($publicDir);
                }
                
                // Move file from private to public storage
                if (Storage::copy($privatePath, $publicPath)) {
                    Storage::delete($privatePath);
                    
                    \Log::warning('Business document moved back to public storage (security risk)', [
                        'customer_id' => $customer->id,
                        'old_path' => $privatePath,
                        'new_path' => $publicPath
                    ]);
                }
            }
        }
    }
};
