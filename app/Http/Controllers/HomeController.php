<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiros;
use App\Models\Cliente;
use App\Mail\FaleConoscoMail;
use App\Mail\ClienteMail;
use App\Mail\NovoClienteMail;
use App\Models\Dependentes;
use App\Models\ValoresPagar;
use App\Models\Servico;
use Illuminate\Support\Facades\Mail;


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
        $servicos = Servico::all();
        return view('sobre', ['servicos' => $servicos]);
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
        $descricao_pagar = "<b>Pagamento referente ao ano de ".date("Y")."</b><br> Associados: <br>".$request->input('nome')."- Valor : €12.00";
        $valor_pagar = 12;
        $acordo = 0;
        if($request->input('acordo')){
            $acordo = 1;
        }
        $cliente->regulamento = $acordo;
        $cliente->save();
       
        $dependentesConta = count($request->input('nome_dependente')); 
        $arrayDependente = [];
        if( $dependentesConta > 0 ){

            for( $i=0; $i < $dependentesConta; $i++){
                if($request->input('nome_dependente')[$i] != null){

                    $dependente = new Dependentes();
                    $dependente->nome = $request->input('nome_dependente')[$i];
                    $dependente->nascimento = $request->input('nascimento_dependente')[$i];
                    $dependente->parentesco_id = $request->input('parentesco_dependente')[$i];
                    $dependente->cliente_id = $cliente->id;
                    if(verifica_nascimento($request->input('nascimento_dependente')[$i]) == 'menor'){
                        $descricao_pagar = $descricao_pagar."<br>".$request->input('nome_dependente')[$i]."- Valor :€5.00";
                        $valor_pagar = $valor_pagar+5;
                    }else{
                        $descricao_pagar = $descricao_pagar."<br>".$request->input('nome_dependente')[$i]."- Valor :€12.00";
                        $valor_pagar = $valor_pagar+12;
                    }
                    $arrayDependente[] = $dependente;
                    $dependente->save();
                }
                
                
            }
            
            
        }
        $valores_pagar = new ValoresPagar();
        $valores_pagar->cliente_id = $cliente->id;
        $valores_pagar->valor = $valor_pagar;
        $valores_pagar->descricao = $descricao_pagar;
        $valores_pagar->save();

        return view('confirmacao_associar', ['cliente' => $cliente, 'valores'=> $valores_pagar, 'dependentes'=> $arrayDependente]);

       // $user = getConfiguration('email_envio_fale_conosco')->valor;
       // Mail::to($user)->send(new NovoClienteMail($cliente));
       // Mail::to($cliente->email)->send(new ClienteMail($cliente, $valores_pagar));
        //dd('salvei mas não saia da tela');

    }

    public function fale_conosco(Request $request){
        $user = getConfiguration('email_envio_fale_conosco')->valor;
       
        Mail::to($user)->send(new FaleConoscoMail($request));
    }
    

    
   
}
