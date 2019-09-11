<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->string('telefone', 15);
            $table->string('entrega');
            $table->string('hora_data');
            $table->integer('quantidade');
            $table->text('notas');
            $table->boolean('estado')->default(false);
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
        Schema::dropIfExists('marcacoes');
    }
}
