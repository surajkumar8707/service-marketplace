<?php

namespace App\DataTables;

use App\Models\Service;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\HtmlString;

class ServiceDatatable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->addColumn('status', function (Service $service) {
                $status = '<div class="form-check form-switch mb-2">';
                $status .= '<input class="form-check-input change-status-input" type="checkbox" id="flexSwitchCheckChecked-' . $service->id . '" data-service-id="' . $service->id . '" ' . ($service->status == 1 ? 'checked' : '') . '>';
                $status .= '</div>';
                return new HtmlString($status);
            })
            ->addColumn('index', function ($row) {
                return $row->serial_no;
            })
            ->addColumn('category_id', function (Service $service) {
                $dates = 'Created: ' . $service->created_at->diffForHumans() . '<br><hr/>';
                $dates .= 'Updated: ' . $service->updated_at->diffForHumans();
                return new HtmlString($service->category->name);
            })
            ->addColumn('created_at', function (Service $service) {
                $dates = 'Created: ' . $service->created_at->diffForHumans() . '<br><hr/>';
                $dates .= 'Updated: ' . $service->updated_at->diffForHumans();
                return new HtmlString($dates);
            })
            // ->addColumn('action', function (Service $service) {
            //     return '<a class="dropdown-item" href="' . route("admin.service.edit", $service) . '"><i class="bx bx-edit-alt me-1"></i> Edit</a>
            //             <a class="dropdown-item delete-plan" href="' . route("admin.service.destroy", $service) . '" onclick="return confirm(\'Are you sure?\')" data-id="' . $service->id . '"><i class="bx bx-trash me-1"></i> Delete</a>';
            // })
            ->addColumn('action', function (Service $service) {
                return new HtmlString('
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-base bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="' . route("admin.service.edit", $service) . '">
                                <i class="icon-base bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <a class="dropdown-item delete-plan" href="' . route("admin.service.destroy", $service) . '" onclick="return confirm(\'Are you sure?\')" data-id="' . $service->id . '">
                                <i class="icon-base bx bx-trash me-1"></i> Delete
                            </a>
                        </div>
                    </div>
                ');
            })


            ->rawColumns(['category_id', 'status', 'created_at', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Service $service): QueryBuilder
    {
        return $service->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('service-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('
                <"row"<"col-md-6 d-flex justify-content-start"f><"col-sm-12 col-md-6 d-flex align-items-center justify-content-end gap-2"lB>>
                <"row"<"col-md-12 custom-table"tr>>
                <"row"<"col-md-6"i><"col-md-6"p>>
            ')
            ->orderBy(1, 'asc')
            ->language(["search" => "", "lengthMenu" => "_MENU_", "searchPlaceholder" => 'Search Service'])
            ->buttons(
                Button::make()
                    ->className('btn btn-primary btn-sm')
                    ->text('<i class="bx bx-plus"></i> New')
                    ->action(
                        'function(e, dt, node, config) {
                            let url = "' . route('admin.service.create') . '";
                            window.location.href = url;
                        }'
                    )
            )
            ->parameters([
                'paging' => true,
                'lengthMenu' => [
                    [5, 10, 25, 50, -1],
                    ['5', '10', '25', '50', 'Show all']
                ],
                'drawCallback' => 'function(settings) {
                    var api = this.api();
                    api.column(0).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }',
                'initComplete' => 'function () {
                    $(".change-status-input").change(function() {
                        var status = $(this).is(":checked") ? "1" : "0"; // Fixed quotes
                        var serviceId = $(this).data("service-id");
                        var requestData = {
                            "status": status,
                            "id": serviceId,
                        };
                        $.ajax({
                            type: "POST",
                            url: "' . route('admin.ajax.service.change.status') . '",
                            data: requestData,
                            dataType: "json",
                            success: function(response) {
                                if (response.status == "success") {
                                    toastr.success(response.message);
                                } else {
                                    toastr.error(response.message);
                                }
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                console.log(xhr);
                                console.log(xhr.responseText);
                                console.log(textStatus, errorThrown);
                                console.log(errorThrown);
                            },
                        });
                    });
                }',
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('index') // Add this column for serial numbers
                ->title('S.No') // Title for the column header
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('category_id'),
            Column::make('name'),
            Column::make('description'),
            Column::make('status'),
            Column::make('created_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Service_' . date('YmdHis');
    }
}
