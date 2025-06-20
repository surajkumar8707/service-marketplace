<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\HtmlString;

class CategoryDatatable extends DataTable
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
            ->addColumn('status', function (Category $category) {
                $status = '<div class="form-check form-switch mb-2">';
                $status .= '<input class="form-check-input change-status-input" type="checkbox" id="flexSwitchCheckChecked-' . $category->id . '" data-category-id="' . $category->id . '" ' . ($category->status == 1 ? 'checked' : '') . '>';
                $status .= '</div>';
                return new HtmlString($status);
            })
            ->addColumn('index', function ($row) {
                // This will add a sequential number column starting from 1
                return $row->serial_no;
            })
            ->addColumn('created_at', function (Category $category) {
                $dates = 'Created: ' . $category->created_at->diffForHumans() . '<br><hr/>';
                $dates .= 'Updated: ' . $category->updated_at->diffForHumans();
                return new HtmlString($dates);
            })
            ->addColumn('action', function (Category $category) {
                return new HtmlString('
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-base bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="' . route("admin.category.edit", $category) . '">
                                <i class="icon-base bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <a class="dropdown-item delete-plan" href="' . route("admin.category.destroy", $category) . '" onclick="return confirm(\'Are you sure?\')" data-id="' . $category->id . '">
                                <i class="icon-base bx bx-trash me-1"></i> Delete
                            </a>
                        </div>
                    </div>
                ');
            })
            ->rawColumns(['image', 'status', 'created_at', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Category $category): QueryBuilder
    {
        return $category->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('category-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('
                <"row"<"col-md-6 d-flex justify-content-start"f><"col-sm-12 col-md-6 d-flex align-items-center justify-content-end gap-2"lB>>
                <"row"<"col-md-12 custom-table"tr>>
                <"row"<"col-md-6"i><"col-md-6"p>>
            ')
            ->orderBy(1, 'asc')
            ->language(["search" => "", "lengthMenu" => "_MENU_", "searchPlaceholder" => 'Search Categroy'])
            ->buttons(
                Button::make()
                    ->className('btn btn-primary btn-sm')
                    ->text('<i class="bx bx-plus"></i> New')
                    ->action(
                        'function(e, dt, node, config) {
                            let url = "' . route('admin.category.create') . '";
                            window.location.href = url;
                        }'
                    )
            )
            ->parameters([
                'paging' => true,
                'lengthMenu' => [
                    [10, 20, 50, 100, -1],
                    [10, 20, 50, 100, 'Show all']
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
                        var categoryId = $(this).data("category-id");
                        var requestData = {
                            "status": status,
                            "id": categoryId,
                        };
                        $.ajax({
                            type: "POST",
                            url: "' . route('admin.ajax.category.change.status') . '",
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
            Column::make('name'),
            Column::make('status'),
            // Column::make('created_at'),
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
        return 'Category_' . date('YmdHis');
    }
}
