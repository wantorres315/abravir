<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class CancelarPagamento extends RowAction
{
    public $name = 'Cancelar Pagamento';

    public function handle(Model $model)
    {
        $model->pago = 'não';
        $model->save();
        $cliente = Cliente::where('id', $model->cliente_id)->first();
        $cliente->ativo = "nao";
        $cliente->save();
        return $this->response()->success('Pagamento Cancelado e usuário inativado')->refresh();
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