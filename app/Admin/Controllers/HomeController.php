<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Models\Cliente;
use App\Models\ValoresPagar;


class HomeController extends Controller
{
    public function index(Content $content)
    {
      
        return $content
            ->title('Dashboard')
            ->description('Associação de Brasileiros de Vila Real')
            
            ->row(function (Row $row) {

                $row->column(6, function (Column $column) {
                    $html = '
                    <div class="card text-center" style = "border:1px solid #cecece;margin-bottom:30px">
                        <div class="card-block">
                            <h4 class="card-title">Clientes Ativos</h4>
                            <h2><i class="fa fa-users fa-2x" style = "color:green"></i></h2>
                        </div>
                        <div class="row px-2 no-gutters">
                            <div class="col-12">
                                <h3 class="card card-block border-top-0 border-left-0 border-bottom-0">'.Cliente::where('ativo','sim')->count().'</h3>
                            </div>
                            
                        </div>
                    </div>
                ';
                   $column->append($html);
                });

                $row->column(6, function (Column $column) {
                    $html = '
                    <div class="card text-center" style = "border:1px solid #cecece">
                        <div class="card-block">
                            <h4 class="card-title">Clientes Inativos</h4>
                            <h2><i class="fa fa-users fa-2x" style = "color:red"></i></h2>
                        </div>
                        <div class="row px-2 no-gutters">
                            <div class="col-12">
                                <h3 class="card card-block border-top-0 border-left-0 border-bottom-0">'.Cliente::where('ativo','nao')->count().'</h3>
                            </div>
                            
                        </div>
                    </div>';
                    $column->append($html);
                });
               
            })
            ->row(function (Row $row) {

                $row->column(6, function (Column $column) {
                    $html = '
                    <div class="card text-center" style = "border:1px solid #cecece">
                        <div class="card-block">
                            <h4 class="card-title">Valores Recebidos</h4>
                            <h2><i class="fa fa-money fa-2x" style = "color:green"></i></h2>
                        </div>
                        <div class="row px-2 no-gutters">
                            <div class="col-12">
                                <h3 class="card card-block border-top-0 border-left-0 border-bottom-0"> € ' .ValoresPagar::where('pago','sim')->sum('valor').'</h3>
                            </div>
                            
                        </div>
                    </div>
                ';
                   $column->append($html);
                });

                $row->column(6, function (Column $column) {
                    $html = '
                    <div class="card text-center" style = "border:1px solid #cecece">
                        <div class="card-block">
                            <h4 class="card-title">Valores a Receber</h4>
                            <h2><i class="fa fa-money fa-2x" style = "color:red"></i></h2>
                        </div>
                        <div class="row px-2 no-gutters">
                            <div class="col-12">
                                <h3 class="card card-block border-top-0 border-left-0 border-bottom-0"> € '.ValoresPagar::where('pago','nao')->sum('valor').'</h3>
                            </div>
                            
                        </div>
                    </div>';
                    $column->append($html);
                });
               
            }
        
        );
            
    }
}
