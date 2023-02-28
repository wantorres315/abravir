<?php

namespace App\Admin\Controllers;

use App\Models\ValoresPagar;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Post\Pagar;
use App\Admin\Actions\Post\CancelarPagamento;

class FinanceiroController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Financeiro';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ValoresPagar());

        $grid->column('id', __('Id'));
       
        $grid->cliente()->display(function ($cliente) {
            
            return $cliente['nome'];
        });
      
        $grid->column('valor', __('Valor Total'));
       
        $grid->column('descricao', __('Valor Discriminado'))->display(function () {
            return $this->descricao;
        });
        $grid->column('pago', __('Pago'));
        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();
            $valor = ValoresPagar::find($actions->getKey());
            if($valor->pago == 'sim'){
                $actions->add(new CancelarPagamento);
            }else{
                $actions->add(new Pagar);
            }
            
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ValoresPagar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cliente_id', __('Cliente id'));
        $show->field('valor', __('Valor'));
        $show->field('descricao', __('Descricao'));
        $show->field('pago', __('Pago'));
       

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ValoresPagar());

        $form->number('cliente_id', __('Cliente id'));
        $form->decimal('valor', __('Valor'));
        $form->textarea('descricao', __('Descricao'));
        $form->text('pago', __('Pago'))->default('nao');

        return $form;
    }
}
