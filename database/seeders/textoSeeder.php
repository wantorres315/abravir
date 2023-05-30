<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Texto;
use DB;

class textoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!empty(Texto::where('nome', 'titulo_site')->first())){
            DB::table('textos')->insert([
                'nome' => 'titulo_site',
                'valor' => '<p>N&atilde;o sou mais a Associa&ccedil;&atilde;o de Brasileiros de Vila Real</p>',
                'tipo' => 'string',
                'ordem'=> 0
            ]);
        }
        if(!empty(Texto::where('nome', 'texto_inicial')->first())){
            DB::table('textos')->insert([
                'nome' => 'texto_inicial',
                'valor' => '<p>Bem vindo a ABRAVIR</p>',
                'tipo' => 'string',
                'ordem'=> 0
            ]);
        }
        if(!empty(Texto::where('nome', 'descricao_inicial')->first())){
            DB::table('textos')->insert([
                'nome' => 'texto_inicial',
                'valor' => '<p>Somos a Associa&ccedil;&atilde;o de Brasileiros do Distrito&nbsp;de Vila Real, juridicamente composta que objetiva representar a comunidade brasileira e promover a&ccedil;&otilde;es de integra&ccedil;&atilde;o em todas as &aacute;reas.&nbsp;</p>

                <p>&nbsp;</p>
                
                <p>&nbsp;</p>',
                'tipo' => 'string',
                'ordem'=> 0
            ]);
        }
       
        
    }
}
