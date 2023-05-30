<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Dependentes;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id)
    {
      
        $cliente = Cliente::where('id',$id)->first();
        $dependentes = Dependentes::where('cliente_id',$id)->get();
        $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate("http://www.abravir.pt/admin/associados/".$cliente->id));
        $data = [
            'cliente' => $cliente,
            'dependentes' => $dependentes,
            'date' => date('m/d/Y'),
            'logo' => public_path() .'/images/logo.png',
            'assinatura' => public_path() .'/images/assinatura.png',
            'qrcode' => $qrcode,
            
        ]; 
        //return view('carteirinha',$data);   

        $pdf = PDF::loadView('carteirinha', $data);
        Mail::to($user)->send(new NovoClienteMail($cliente));
        Mail::to($cliente->email)->send(new ClienteMail($cliente, $valores_pagar));
        //return $pdf->download('carteirinha.pdf');
        
        
    }
}