<?php

namespace App\Admin\Controllers;

use App\Models\Noticia;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NoticiasController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Noticias';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Noticia());

        $grid->column('id', __('Id'));
        $grid->column('titulo', __('Titulo'));
        $grid->column('resumo', __('Resumo'));
       
        $grid->column('foto_main', __('Foto principal'))->image();
        
      

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
        $show = new Show(Noticia::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('titulo', __('Titulo'));
        $show->field('resumo', __('Resumo'));
        $show->field('texto', __('Texto'));
        $show->field('foto_main', __('Foto main'));
        $show->field('foto1', __('Foto1'));
        $show->field('foto2', __('Foto2'));
        $show->field('foto3', __('Foto3'));
        $show->field('foto4', __('Foto4'));
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
        $form = new Form(new Noticia());

        $form->text('titulo', __('Titulo'));
        $form->text('resumo', __('Resumo'));
        $form->ckeditor('texto', __('Texto'));
        $form->file('foto_main', __('Foto main'));
        $form->file('foto1', __('Foto/Video 1'));
        $form->file('foto2', __('Foto/Video 2'));
        $form->file('foto3', __('Foto/Video 3'));
        $form->file('foto4', __('Foto/Video 4'));

        return $form;
    }
}
