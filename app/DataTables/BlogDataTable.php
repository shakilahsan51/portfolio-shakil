<?php

namespace App\DataTables;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BlogDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        
            ->addColumn('image', function($query){
                return '<img src="'.asset($query->image).'" width="60" />';
            })

            ->addColumn('category_id', function($query){
                return $query->getCategory->name;
            })


            ->addColumn('created_at', function($query){
                return date('d-m-y', strtotime($query->created_at));
            })

            
            ->addColumn('action',function($query){
                return '<a href="'.route('admin.blog.edit',$query->id).'" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a> 
                <a href= "'.route('admin.blog.destroy',$query->id).'" class="btn btn-danger delete-item"><i class="fa-solid fa-trash"></i></a>';
            })


            ->rawColumns(['image','action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Blog $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Blog $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('blog-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->width(60),
            Column::make('image')->width(150),
            Column::make('title'),
            Column::make('category_id')->width(250),
            Column::make('created_at')->width(140),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(200)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Blog_' . date('YmdHis');
    }
}
