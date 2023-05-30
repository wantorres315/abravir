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
use App\Models\Equipes;
use App\Models\Noticia;
use App\Models\Galeria;
use App\Models\Fotos;
use App\Models\Eventos;
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
        $parceiros = Parceiros::limit(3)->where('home',1)->get();
        $servicos = Servico::all();
        $noticias = Noticia::limit(3)->orderBy('created_at','desc')->get();
        $titulo_noticia = getConfig('text_noticias_home')->valor;
        return view('home', ['parceiros' => $parceiros, 'noticias' => $noticias, 'titulo_noticia'=>$titulo_noticia, 'servicos' => $servicos]);
    }

    public function parceiros()
    {
        $parceiros = Parceiros::orderBy('home','DESC')->get();
        return view('parceiros', ['parceiros' => $parceiros, 'show_all' => true]);
    }

    public function sobre()
    {
        $servicos = Servico::all();
        $equipe = Equipes::all();
        return view('sobre', ['servicos' => $servicos, 'equipes' => $equipe]);
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
        $cliente->rg = $request->input('rg');
        $cliente->cpf = $request->input('cpf');
        $anoInicial = date("Y");
        $anoFinal = date("Y")+1;
        $month = date("m");
        
        $cliente->validade = $anoFinal."-".$month."-".date('d'); 
        
        switch ($month) {
            case '1':
                $mesAtual = 'Janeiro';
                break;
            case '2':
                $mesAtual = 'Fevereiro';
                break;
            case '3':  
                $mesAtual = 'Março';
                break;  
            case '4':  
                $mesAtual = 'Abril';
                break;  
            case '5':
                $mesAtual = 'Maio';
                break;
            case '6':
                $mesAtual = 'Junho';
                break;
            case '7':
                $mesAtual = 'Julho';
                break;
            case '8':
                $mesAtual = 'Agosto';
                break;
            case '9':
                $mesAtual = 'Setembro';
                break;
            case '10':
                $mesAtual = 'Outubro';
                break;
            case '11':
                $mesAtual = 'Novembro';
                break;
            case '12':
                $mesAtual = 'Dezembro';
                break;
            default:
                # code...
                break;
        } 
        $descricao_pagar = "<b>Valores equivalentes do Mẽs de ".$mesAtual." ano de ".$anoInicial." até ".$mesAtual." de ".$anoFinal."</b><br> Associados: <br>".$request->input('nome')."- Valor : €12.00";
        $valor_pagar = 12;
        $acordo = 0;
        if($request->input('acordo')){
            $acordo = 1;
        }
        $cliente->regulamento = $acordo;
        $cliente->save();
        
        $dependentesConta = 0;
        if(!empty($request->input('nome_dependente'))){
            $dependentesConta = count($request->input('nome_dependente')); 
        }
        
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
                        $descricao_pagar = $descricao_pagar."<br>".$request->input('nome_dependente')[$i]."- Valor :€0.00";
                        $valor_pagar = $valor_pagar+0;
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

       
    }

    public function fale_conosco(Request $request){
        $user = getConfiguration('email_envio_fale_conosco')->valor;
       
        Mail::to($user)->send(new FaleConoscoMail($request));
    }

    public function noticias(){
        $noticias = Noticia::all();
        return view('noticias', ['noticias' => $noticias, 'show_all' => true]);
    }
    
    public function noticias_interna($id){
        $noticia = Noticia::find($id);
        $title = "noticia_interna";
        return view('noticias_interna', ['noticia' => $noticia, 'title' => $title]);
       
    }
    public function cancela_associacao($id){
        
        $valor_pagar = ValoresPagar::where('cliente_id',$id)->delete();
        $dependentes = Dependentes::where('cliente_id',$id)->delete();
        $cliente = Cliente::find($id)->delete();
        return redirect('/associar');

    }
    public function confirma_associacao($id){
        $cliente = Cliente::find($id);
        $valores_pagar = ValoresPagar::where('cliente_id',$id)->first();
        $user = getConfiguration('email_envio_fale_conosco')->valor;
        Mail::to($user)->send(new NovoClienteMail($cliente));
        $cliente = Cliente::find(26);
        return redirect('/associar?cadastrado=true');
    }

    public function momentos(){
        $momentos = Galeria::paginate(9);
        return view('momentos', ['momentos' => $momentos]);
    }

    public function momento($id){
        $momento = Galeria::find($id);
        return view('momento_interna',['momento' => $momento]);
        
    }
    public function getFotos($id){
        $fotos = Fotos::where('galeria_id',$id)->get();
        $fotoArray = [];
        foreach($fotos as $foto){
            $fotoArray[] = ['texto' => $foto->texto,
            'foto' => url(str_replace('public','storage', $foto->foto)),
            'width_c'=> 800,
            'width_h'=> 1600,
            'width_k'=> 2048,
            'width_l'=> 1024,
            'width_m'=> 500,
            'width_n'=> 320,
            'width_q'=> 150,
            'width_s'=> 240,
            'width_sq'=> 75,
            'width_t'=> 100,
            'width_z'=> 640,
            'height_c'=> 533,
            'height_h'=> 1067,
            'height_k'=> 1365,
            'height_l'=> 683,
            'height_m'=> 333,
            'height_n'=> 213,
            'height_q'=> 150,
            'height_s'=> 160,
            'height_sq'=> 67,
            'height_t'=> 67,
            'height_z'=> 427];
        }
        return $fotoArray;
    }
    
    public function getCalendar(){
        $eventos = Eventos::where('data', '>=', date('Y-m-d'))->where('publico','1')->get();
        $ev = [];
        foreach($eventos as $evento){
            $data = explode('-', $evento->data);
            switch($data[1]){
                case 1:
                    $mes = 'Jan';
                break;
                case 2:
                    $mes = 'Feb';
                break;
                case 3:
                    $mes = 'Mar';
                break;
                case 4:
                    $mes = 'Apr';
                break;
                case 5:
                    $mes = 'May';
                break;
                case 6:
                    $mes = 'Jun';
                break;
                case 7:
                    $mes = 'Jul';
                break;
                case 8:
                    $mes = 'Aug';
                break;
                case 9:
                    $mes = 'Set';
                break;
                case 10:
                    $mes = 'Oct';
                break;
                case 11:
                    $mes = 'Nov';
                break;
                case 12:
                    $mes = 'Dec';
                break;
            }
            $ev[] = ['id' => rand(1,5),
                    'name' => $evento->titulo,
                    'description' => '',
                    'date' => $mes.'/'.$data[2]."/".$data[0],
                    'link' => $evento->link,
                    'type' => 'event'];
            
        }
        return $ev;
    }
   
}
