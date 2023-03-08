<?php

namespace App\Admin\Controllers;

use App\Models\Equipes;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EquipesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Equipes';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Equipes());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('descricao', __('Descricao'));
        $grid->column('cargo', __('Cargo'));
        
        $grid->column('logo', __('Logo'))->image();
        $grid->column('email', __('Email'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('instagram', __('Instagram'));
        $grid->column('ordem', __('Ordem'));
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
        $show = new Show(Equipes::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('descricao', __('Descricao'));
        $form->file('Logo',__('Logo'));
        $show->field('email', __('Email'));
        $show->field('facebook', __('Facebook'));
        $show->field('instagram', __('Instagram'));
        $show->field('ordem', __('Ordem'));
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
        $form = new Form(new Equipes());

        $form->text('nome', __('Nome'));
        $form->textarea('descricao', __('Descricao'));
        $form->text('cargo', __('Cargo'));
        $form->file('Logo',__('Logo'));
        $form->textarea('email', __('Email'));
        $form->text('facebook', __('Facebook'));
        $form->text('instagram', __('Instagram'));
        $form->number('ordem', __('Ordem'));

        return $form;
    }
}
