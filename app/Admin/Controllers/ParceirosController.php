<?php

namespace App\Admin\Controllers;

use App\Models\Parceiros;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ParceirosController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Parceiros';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Parceiros());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('logo', __('Logo'))->image();
      
        $grid->column('tipo_atividade', __('Tipo atividade'));
        $grid->column('site', __('Site'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('instagram', __('Instagram'));
        $grid->column('tiktok', __('Tiktok'));
        $grid->column('telefone', __('Telefone'));
        $grid->column('endereco', __('Endereco'));
        $grid->column('telemovel', __('Telemovel'));
        $grid->column('horario_atendimento', __('Horario atendimento'));
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
        $show = new Show(Parceiros::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('logo', __('Logo'));
        $show->field('tipo_atividade', __('Tipo atividade'));
        $show->field('site', __('Site'));
        $show->field('facebook', __('Facebook'));
        $show->field('instagram', __('Instagram'));
        $show->field('tiktok', __('Tiktok'));
        $show->field('telefone', __('Telefone'));
        $show->field('endereco', __('Endereco'));
        $show->field('telemovel', __('Telemovel'));
        $show->field('horario_atendimento', __('Horario atendimento'));
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
        $form = new Form(new Parceiros());

        $form->text('nome', __('Nome'));
        $form->file('Logo',__('Logo'));
        $form->text('tipo_atividade', __('Tipo atividade'));
        $form->text('site', __('Site'));
        $form->text('facebook', __('Facebook'));
        $form->text('instagram', __('Instagram'));
        $form->text('tiktok', __('Tiktok'));
        $form->text('telefone', __('Telefone'));
        $form->text('endereco', __('Endereco'));
        $form->text('telemovel', __('Telemovel'));
        $form->text('horario_atendimento', __('Horario atendimento'));
        $form->textarea('observacoes', __('Observações sobre a parceria'));

        return $form;
    }
}
