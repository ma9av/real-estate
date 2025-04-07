<?php

namespace App\DataTables;

use App\Models\Property;
use Yajra\DataTables\Services\DataTable;

class PropertiesDataTable extends DataTable
{
   
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('actions', function ($property) {
                return view('properties.partials.actions', compact('property'));
            });
    }

    public function query(Property $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('properties-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['title' => 'Actions'])
            ->dom('Bfrtip')
            ->buttons(['excel', 'csv', 'print', 'reset', 'reload']);
    }

    protected function getColumns()
    {
        return [
            'title',
            'price',
            'description'
        ];
    }

    protected function filename()
    {
        return 'Properties_' . date('YmdHis');
    }
}
