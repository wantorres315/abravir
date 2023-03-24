<?php

namespace App\Admin\Controllers;

use App\Models\Galeria;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Post\InserirFoto;

class GaleriasController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Momentos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Galeria());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('resumo', __('Resumo'));
        $grid->actions(function ($actions) {
            $actions->disableView();
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
        $show = new Show(Galeria::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('resumo', __('Resumo'));
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
        $form = new Form(new Galeria());

        $form->text('title', __('Title'));
        $form->text('resumo', __('Resumo'));
        $form->hasMany('fotos','Fotos', function (Form\NestedForm $form) {
            $form->file('foto', __('Foto'));
            $form->text('texto','Texto');
          
        });
        return $form;
    }
}
