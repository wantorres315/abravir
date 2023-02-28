<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class parentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parentesco')->insert([
            'nome' => 'Marido/Esposa'
           
        ]);
        
        DB::table('parentesco')->insert([
            'nome' => 'filho/filha'
           
        ]);
        DB::table('parentesco')->insert([
            'nome' => 'irmão/irmã'
           
        ]);
        DB::table('parentesco')->insert([
            'nome' => 'primo'
           
        ]);
        DB::table('parentesco')->insert([
            'nome' => 'cunhado/cunhada'
           
        ]);
        DB::table('parentesco')->insert([
            'nome' => 'avô/avó'
           
        ]);
        DB::table('parentesco')->insert([
            'nome' => 'pai/mãe'
           
        ]);
        DB::table('parentesco')->insert([
            'nome' => 'Sogro/Sogra'
           
        ]);
        
    }
}
