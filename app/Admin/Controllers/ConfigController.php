<?php

namespace App\Admin\Controllers;

use App\Models\Configuracao;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ConfigController extends AdminController
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

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('valor', __('Valor'));
        $grid->column('tipo', __('Tipo'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('valor', __('Valor'));
        $show->field('tipo', __('Tipo'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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

        return $form;
    }
}
