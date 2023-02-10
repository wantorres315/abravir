<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Aprovar extends RowAction
{
    public $name = 'Ativar';

    public function handle(Model $model)
    {
        
        $model->ativo = 'sim';
        $model->save();
        return $this->response()->success('Associado Ativado!')->refresh();
    }
    public function dialog()
    {
        $this->confirm('Você tem certeza que deseja aprovar esse associado?');
    }

    public function html()
    {
        return "<a class='report-posts btn btn-sm btn-success'><i class='fa fa-thumbs-up'></i>Report</a>";
    }
}