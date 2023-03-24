<?php

namespace App\Admin\Controllers;

use App\Models\Doacoes;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DoacoesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Doacoes';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Doacoes());

        $grid->column('id', __('Id'));
        $grid->column('nome_doador', __('Nome doador'));
        $grid->column('nome_receptor', __('Nome receptor'));
        $grid->column('valor', __('Valor'));
        $grid->column('doado', __('Doado'));


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
        $show = new Show(Doacoes::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome_doador', __('Nome doador'));
        $show->field('nome_receptor', __('Nome receptor'));
        $show->field('valor', __('Valor'));
        $show->field('doado', __('Doado'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Doacoes());

        $form->text('nome_doador', __('Nome doador'));
        $form->text('nome_receptor', __('Nome receptor'));
        $form->decimal('valor', __('Valor'));
        $form->number('doado', __('Doado'));

        return $form;
    }
}
