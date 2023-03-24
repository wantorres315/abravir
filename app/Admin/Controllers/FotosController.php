<?php

namespace App\Admin\Controllers;

use App\Models\Fotos;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FotosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Fotos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Fotos());

        $grid->column('id', __('Id'));
        $grid->column('galeria_id', __('Galeria id'));
        $grid->column('texto', __('Texto'));
        $grid->column('foto', __('Foto'));
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
        $show = new Show(Fotos::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('galeria_id', __('Galeria id'));
        $show->field('texto', __('Texto'));
        $show->field('foto', __('Foto'));
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
        $form = new Form(new Fotos());

        $form->number('galeria_id', __('Galeria id'));
        $form->text('texto', __('Texto'));
        $form->textarea('foto', __('Foto'));

        return $form;
    }
}
