<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Reprovar extends RowAction
{
    public $name = 'Desativar';

    public function handle(Model $model)
    {
        $model->ativo = 'não';
        $model->save();
        return $this->response()->success('Associado Desativado!')->refresh();
    }
    public function dialog()
    {
        $this->confirm('Você tem certeza que deseja desativar esse associado?');
    }

    public function html()
    {
        return "<a class='report-posts btn btn-sm btn-success'><i class='fa fa-thumbs-up'></i>Report</a>";
    }
}