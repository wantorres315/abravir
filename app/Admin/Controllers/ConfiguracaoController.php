<?php

namespace App\Admin\Controllers;

use App\Models\Configuracao;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ConfiguracaoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Configuracao';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Configuracao());
        $grid->column('id', __('ID'))->sortable();
        $grid->column('nome', __('Nome'))->sortable();
        $grid->column('valor', __('Valor'))->sortable();
        $grid->column('tipo', __('Tipo'))->sortable();
        $grid->column('ordem', __('Ordem'))->sortable();
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
        $show = new Show(Configuracao::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Configuracao());

       
        $form->text('nome', __('Nome'));
        $form->text('valor', __('Valor'));
        $form->text('tipo', __('Tipo'));
        $form->text('ordem', __('Ordem'));
        return $form;
    }
}
