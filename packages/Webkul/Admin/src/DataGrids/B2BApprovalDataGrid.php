<?php

namespace Webkul\Admin\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class B2BApprovalDataGrid extends DataGrid
{
    /**
     * Index.
     *
     * @var string
     */
    protected $primaryColumn = 'customer_id';

    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function prepareQueryBuilder()
    {
        $tablePrefix = DB::getTablePrefix();

        $queryBuilder = DB::table('customers')
            ->leftJoin('admins', 'customers.approved_by', '=', 'admins.id')
            ->addSelect(
                'customers.id as customer_id',
                'customers.first_name',
                'customers.last_name',
                'customers.email',
                'customers.phone',
                'customers.approval_status',
                'customers.business_document',
                'customers.document_deleted',
                'customers.document_deleted_at',
                'customers.document_deletion_reason',
                'customers.approved_at',
                'customers.created_at as registration_date',
                DB::raw('CONCAT(' . $tablePrefix . 'customers.first_name, " ", ' . $tablePrefix . 'customers.last_name) as full_name'),
                DB::raw('COALESCE(' . $tablePrefix . 'admins.name, "System") as approved_by_name')
            )
            ->where(function($query) {
                $query->whereNotNull('customers.business_document')
                      ->orWhere('customers.document_deleted', true);
            }) // Show customers who uploaded documents OR had documents deleted
            ->orderBy('customers.created_at', 'desc');

        $this->addFilter('customer_id', 'customers.id');
        $this->addFilter('full_name', DB::raw('CONCAT(' . $tablePrefix . 'customers.first_name, " ", ' . $tablePrefix . 'customers.last_name)'));
        $this->addFilter('email', 'customers.email');
        $this->addFilter('phone', 'customers.phone');
        $this->addFilter('approval_status', 'customers.approval_status');

        return $queryBuilder;
    }

    /**
     * Add columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'customer_id',
            'label'      => 'ID',
            'type'       => 'integer',
            'filterable' => true,
            'width'      => '60px',
        ]);

        $this->addColumn([
            'index'      => 'full_name',
            'label'      => 'Name',
            'type'       => 'string',
            'filterable' => true,
            'sortable'   => true,
            'width'      => '180px',
        ]);

        $this->addColumn([
            'index'      => 'email',
            'label'      => 'E-Mail',
            'type'       => 'string',
            'filterable' => true,
            'sortable'   => true,
            'width'      => '180px',
        ]);

        $this->addColumn([
            'index'      => 'phone',
            'label'      => 'Telefon',
            'type'       => 'string',
            'filterable' => true,
            'width'      => '110px',
        ]);

        $this->addColumn([
            'index'      => 'approval_status',
            'label'      => 'Status',
            'type'       => 'string',
            'filterable' => true,
            'filterable_type' => 'dropdown',
            'filterable_options' => [
                ['label' => 'Ausstehend', 'value' => 'pending'],
                ['label' => 'Genehmigt', 'value' => 'approved'],
                ['label' => 'Abgelehnt', 'value' => 'rejected'],
            ],
            'sortable'   => true,
            'width'      => '100px',
            'closure'    => function ($row) {
                $statusLabels = [
                    'pending' => '<span class="label-pending">Ausstehend</span>',
                    'approved' => '<span class="label-active">Genehmigt</span>',
                    'rejected' => '<span class="label-canceled">Abgelehnt</span>',
                ];

                return $statusLabels[$row->approval_status] ?? $row->approval_status;
            }
        ]);

        $this->addColumn([
            'index'      => 'business_document',
            'label'      => 'Dokument',
            'type'       => 'string',
            'sortable'   => false,
            'width'      => '170px',
            'closure'    => function ($row) {
                if ($row->document_deleted) {
                    $deletedDate = $row->document_deleted_at ? \Carbon\Carbon::parse($row->document_deleted_at)->format('d.m.Y H:i') : '';
                    return '<div class="flex flex-col">
                                <span class="label-deleted text-xs font-semibold">
                                    <i class="icon-delete text-xs"></i> Gelöscht
                                </span>
                                <span class="text-xs text-gray-500 mt-1">am ' . $deletedDate . '</span>
                                <span class="text-xs text-gray-500">Grund: ' . ($row->document_deletion_reason ?? 'Nicht angegeben') . '</span>
                            </div>';
                } elseif ($row->business_document) {
                    return '<div class="flex items-center gap-2 justify-center">
                                <a href="' . route('admin.customers.b2b.approvals.download', $row->customer_id) . '" target="_blank" class="inline-flex items-center justify-center px-2 py-1 text-xs bg-blue-100 text-blue-700 hover:bg-blue-600 hover:text-white rounded transition-all duration-200 font-medium" title="Dokument herunterladen">
                                    <span class="icon-eye text-sm mr-1"></span> Download
                                </a>
                                <button onclick="deleteDocument(' . $row->customer_id . ')" class="inline-flex items-center justify-center px-2 py-1 text-xs bg-red-100 text-red-700 hover:bg-red-600 hover:text-white rounded transition-all duration-200 font-medium" title="Dokument löschen">
                                    <span class="icon-cancel-1 text-sm mr-1"></span> Delete
                                </button>
                            </div>';
                }
                return '<span class="text-gray-400">-</span>';
            }
        ]);

        $this->addColumn([
            'index'      => 'registration_date',
            'label'      => 'Registriert',
            'type'       => 'datetime',
            'sortable'   => true,
            'width'      => '130px',
            'closure'    => function ($row) {
                return \Carbon\Carbon::parse($row->registration_date)->format('d.m.Y');
            }
        ]);


    }

    /**
     * Prepare actions.
     *
     * @return void
     */
    public function prepareActions()
    {
        if (bouncer()->hasPermission('customers.customers.edit')) {
            $this->addAction([
                'index'  => 'approve',
                'icon'   => 'icon-check',
                'title'  => 'Genehmigen',
                'method' => 'POST',
                'attributes' => [
                    'title' => 'B2B-Antrag genehmigen',
                    'data-tooltip' => 'Genehmigen'
                ],
                'url'    => function ($row) {
                    return route('admin.customers.b2b.approvals.approve', $row->customer_id);
                },
                'condition' => function ($row) {
                    return $row->approval_status === 'pending';
                }
            ]);

            $this->addAction([
                'index'  => 'reject',
                'icon'   => 'icon-cancel-1',
                'title'  => 'Ablehnen',
                'method' => 'POST',
                'attributes' => [
                    'title' => 'B2B-Antrag ablehnen',
                    'data-tooltip' => 'Ablehnen'
                ],
                'url'    => function ($row) {
                    return route('admin.customers.b2b.approvals.reject', $row->customer_id);
                },
                'condition' => function ($row) {
                    return $row->approval_status === 'pending';
                }
            ]);

            $this->addAction([
                'index'  => 'reset',
                'icon'   => 'icon-refresh',
                'title'  => 'Zurücksetzen',
                'method' => 'POST',
                'attributes' => [
                    'title' => 'Status zurücksetzen',
                    'data-tooltip' => 'Zurücksetzen'
                ],
                'url'    => function ($row) {
                    return route('admin.customers.b2b.approvals.reset', $row->customer_id);
                },
                'condition' => function ($row) {
                    return $row->approval_status !== 'pending';
                }
            ]);
        }
    }
}