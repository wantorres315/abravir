<?php

namespace App\Admin\Controllers;

use App\Models\Eventos;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EventosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Eventos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Eventos());

       
        $grid->column('data', __('Data'));
        $grid->column('titulo', __('titulo'));
        $grid->column('link', __('link'));
        $grid->column('publico', __('publico'));
        


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
        $show = new Show(Eventos::findOrFail($id));

       
        $show->field('data', __('Data'));
        $show->field('titulo', __('Título'));
        $show->field('link', __('Link'));
        $show->field('publico', __('publico'));
       


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Eventos());

        $form->date('data', __('Data'));
        $form->text('titulo', __('Título'));
        $form->text('link', __('Link'));
        $form->select('publico', __('publico'))->options([0 => 'Não', 1 => 'sim']);

        return $form;
    }
}
