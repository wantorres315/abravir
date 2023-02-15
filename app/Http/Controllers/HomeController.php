<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiros;
use App\Models\Cliente;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parceiros = Parceiros::limit(3)->get();
        return view('home', ['parceiros' => $parceiros]);
    }

    public function parceiros()
    {
        $parceiros = Parceiros::all();
        return view('parceiros', ['parceiros' => $parceiros, 'show_all' => true]);
    }

    public function sobre()
    {
        return view('sobre');
    }
    public function associar()
    {
        return view('associar');
    }
    public function save(Request $request){
        
        $cliente = new Cliente;
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->telemovel = $request->input('telemovel');
        $cliente->nacionalidade = $request->input('nacionalidade');
        $cliente->nascimento = $request->input('nascimento');
        $cliente->tipo_documento = $request->input('doc_type');
        $cliente->documento = $request->input('documento');
        $cliente->cep = $request->input('codigo_postal');
        $cliente->endereco = $request->input('endereco');
        $acordo = 0;
        if($request->input('acordo')){
            $acordo = 1;
        }
        $cliente->regulamento = $acordo;
        $cliente->save();
    }
}
