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
        DB::table('parentescos')->insert([
            'nome' => 'Marido/Esposa'
           
        ]);
        
        DB::table('parentescos')->insert([
            'nome' => 'filho/filha'
           
        ]);
        DB::table('parentescos')->insert([
            'nome' => 'irmão/irmã'
           
        ]);
        DB::table('parentescos')->insert([
            'nome' => 'primo'
           
        ]);
        DB::table('parentescos')->insert([
            'nome' => 'cunhado/cunhada'
           
        ]);
        DB::table('parentescos')->insert([
            'nome' => 'avô/avó'
           
        ]);
        DB::table('parentescos')->insert([
            'nome' => 'pai/mãe'
           
        ]);
        DB::table('parentescos')->insert([
            'nome' => 'Sogro/Sogra'
           
        ]);
        
    }
}
