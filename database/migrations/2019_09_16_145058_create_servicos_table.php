<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nome');
            $table->longText('descricao');
            $table->string('CEP');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->dateTime('horaInicial');
            $table->dateTime('horaFinal');
            $table->bigInteger('id_dono')->unsigned();
            $table->string('status');
            $table->string('pagamento');
            $table->string('avaliacao')->nullable();
            $table->string('id_prestador')->nullable();

            $table->foreign('id_dono')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');   

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
