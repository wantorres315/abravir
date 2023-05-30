<?php

namespace App\Admin\Actions\Post;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dependentes;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\Carteirinha;

class SendCarteirinha extends RowAction
{
    public $name = 'Enviar Carteirinha';

    public function handle(Model $model)
    {
        
        $dependentes = Dependentes::where('cliente_id',$model->id)->get();
        $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate("http://www.abravir.pt/admin/associados/".$model->id));
        $data = [
            'cliente' => $model,
            'dependentes' => $dependentes,
            'date' => date('m/d/Y'),
            'logo' => public_path() .'/images/logo.png',
            'assinatura' => public_path() .'/images/assinatura.png',
            'qrcode' => $qrcode,
            
        ];    
        $pdf = PDF::loadView('carteirinha', $data);
        
        Mail::to($model->email)->send(new Carteirinha($model, $pdf->output()));
      
        return $this->response()->success('Carteirinha Enviada!')->refresh();


    }
    public function dialog()
    {
        $this->confirm('Você tem certeza que deseja enviar carteirinha para esse associado?');
    }

    public function html()
    {
        return "<a class='report-posts btn btn-sm btn-success'><i class='fa fa-thumbs-up'></i>Report</a>";
    }
}