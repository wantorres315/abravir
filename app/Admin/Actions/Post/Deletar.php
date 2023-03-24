<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dependentes;
use App\Models\ValoresPagar;

class Deletar extends RowAction
{
    public $name = 'Deletar';

    public function handle(Model $model)
    {
        $dependentes = Dependentes::where('cliente_id',$model->id)->delete();
        $valores_pagar = ValoresPagar::where('cliente_id',$model->id)->delete();
        $model->delete();
        return $this->response()->success('Associado Deletado!')->refresh();
    }
    public function dialog()
    {
        $this->confirm('Você tem certeza que deseja deletar esse associado? (Essa ação não pode ser desfeita)');
    }

    public function html()
    {
        return "<a class='report-posts btn btn-sm btn-danger'><i class='fa fa-thumbs-up'></i>Report</a>";
    }
}