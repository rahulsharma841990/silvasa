<?php

namespace App\DataTables;

use App\addnews;
use Yajra\Datatables\Services\DataTable;

class NewsDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            // ->addColumn('action', 'admin_view.pages.news_actions');
            ->addColumn('action', function($model){
                    return view('admin_view.pages.news_actions',['model'=>$model]);
                })->editColumn('img', function($model){
             return '<img src="'.asset('frontend/images/'.$model->img).'" />';
            })->rawColumns(['img','action']);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = addnews::query()->select($this->getColumns());

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax('')
                    ->addAction(['width' => '80px'])
                    ->parameters([
                        'dom'     => 'Blfrtip',
                        'order'   => [[0, 'desc']],
                        'buttons' => [
                            'create',
                            'export',
                            'print',
                            'reset',
                            'reload',
                        ],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'title',
            'desc',
            'img',
            'created_at',
            'updated_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'newsdatatable_' . time();
    }
}
