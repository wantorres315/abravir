<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->resource('associados', ClienteController::class);
    $router->resource('parentesco', ParentescoController::class);
    $router->resource('textos', TextoController::class);
    $router->resource('config', ConfigController::class);
    $router->resource('parceiros', ParceirosController::class);
    $router->resource('financeiro', FinanceiroController::class);
    $router->resource('servicos', ServicosController::class);
    $router->resource('equipe', EquipesController::class);
    $router->resource('noticias', NoticiasController::class);
    $router->resource('doacoes', DoacoesController::class);
    $router->resource('momentos', GaleriasController::class);
    $router->resource('proximos_eventos', EventosController::class);
    $router->get('/', 'HomeController@index')->name('home');
   
});
