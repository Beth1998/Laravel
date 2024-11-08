<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function(Blueprint $table){
            $table->id(); //Esta linea es el id de la tabla y como se trabaja en MySql ya es autoincrementada.
            $table->string('nombre');
            $table->string('apellido');
            $table->timestamps(); //Esta linea me sirve para llevar un registro de la creacion de la tabla, esta linea es indispensable.
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
    }
}
