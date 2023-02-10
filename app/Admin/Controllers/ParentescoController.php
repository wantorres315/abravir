<?php

namespace App\Admin\Controllers;

use App\Models\Parentesco;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ParentescoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Parentesco';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Parentesco());

        $grid->column('nome', __('Nome'));
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
        $show = new Show(Parentesco::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Parentesco());
        $form->disableEditingCheck();

        $form->disableCreatingCheck();
    
        $form->disableViewCheck();
        $form->text('nome', __('Name'));
        $form->tools(function (Form\Tools $tools) {
           
            $tools->disableView();
            
        });
        return $form;
    }
}
