<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email');
            $table->integer('regulamento')->default(0);
            $table->string('nome');
            $table->string('nacionalidade');
            $table->date('nascimento');
            $table->string('telefone');
            $table->string('telemovel');
            $table->text('endereco');
            $table->string('cep');
            $table->string('tipo_documento');
            $table->string('documento');
            $table->integer('dependentes');
            $table->string('ativo')->default('não');
            $table->timestamps();
        });
        Schema::create('parentescos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->timestamps();
        });

        Schema::create('dependentes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->date('nascimento');
            $table->integer('parentesco_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('parentesco');
        Schema::dropIfExists('dependentes');
    }
};
