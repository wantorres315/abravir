<?php

namespace App\Admin\Controllers;

use App\Models\Cliente;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Request;
Use Encore\Admin\Widgets\Table;
use App\Admin\Actions\Post\Aprovar;
use App\Admin\Actions\Post\Reprovar;
use App\Admin\Actions\Post\Deletar;
class ClienteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Associados';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

    protected function grid()
    {

        $grid = new Grid(new Cliente());

        $grid->column('id', __('ID'))->sortable();

        $grid->column('nome', __('Nome'))->expand(function ($model) {
         
            $dependentes = $model->dependentes($model->getKey())->map(function ($dependente) {
                return $dependente->only(['nome', 'parentesco','nascimento']);
            });
            return new Table([ 'nome','parentesco' ,'nascimento'], $dependentes->toArray());
        });
       
        $grid->column('telefone', __('Telefone'));
        $grid->column('ativo', __('Ativo'));
        $grid->email()->display(function ($email) {
            return "$email";
        });
        $grid->column('dependentesCount', 'Nº de Dependentes')->display(function ($dependentes) {
            $count = count($dependentes);
            return $count;
        });
        
        $grid->paginate(15);
        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();
            $cliente = Cliente::find($actions->getKey());
            if($cliente->ativo == 'sim'){
                $actions->add(new Reprovar);
            }else{
                $actions->add(new Aprovar);
            }
            $actions->add(new Deletar);
            
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
        $show = new Show(Cliente::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */

 
    protected function form()
    {
        $form = new Form(new Cliente());
        $form->disableAddButton();
        $form->text('nome', __('Name'));
        $form->email('email', __('Email'));
        $form->column(1/2, function ($form) {
            
        });
        $form->column(1/2, function ($form) {
            
            
            $form->select('nacionalidade', __('Nacionalidade'))->options(['brasileira' => 'Brasileira', 'portuguesa' => 'Portuguesa']);
            
            $form->text('telefone', __('Telefone'))->inputmask(['mask' => '+999-999999999']);

            

            $form->radio('regulamento','De acordo com o Regulamento Geral de Proteção de Dados, de 25 de maio de 2018, ao preencher este formulário concordo de maneira livre, informada e inequívoca com o tratamento dos meus dados pessoais somente para o fim de armazenamento, comunicação, inscrição e direcionamento  para as atividades da Associação de Brasileiros do Distrito de Vila Real.')->options(['sim'=> 'sim', 'não' => 'não' ])->stacked();

            $form->isCreating();
            $form->footer(function ($footer) {

                // disable reset btn
                $footer->disableReset();
            
                
            
                // disable `View` checkbox
                $footer->disableViewCheck();
            
                // disable `Continue editing` checkbox
                $footer->disableEditingCheck();
            
                // disable `Continue Creating` checkbox
                $footer->disableCreatingCheck();
            
            });
        });

        
        return $form;
    }
}
