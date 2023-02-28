<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;


class Pagar extends RowAction
{
    public $name = 'Confirmar Pagamento';

    public function handle(Model $model)
    {
        
        $model->pago = 'sim';
        $model->save();
        $cliente = Cliente::where('id', $model->cliente_id)->first();
        $cliente->ativo = "sim";
        $cliente->save();
        return $this->response()->success('Valor pago pelo cliente e já cliente ativado!')->refresh();
    }
    public function dialog()
    {
        $this->confirm('Você tem certeza que deseja pagar essa nota?');
    }

    public function html()
    {
        return "<a class='report-posts btn btn-sm btn-success'><i class='fa fa-thumbs-up'></i>Report</a>";
    }
}