<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id');
             //datos del cliente
             $table->string('nombreCliente');
             //datos del producto
             $table->string('nombreProducto');
             $table->integer('precio');
             $table->integer('cantidad');
             $table->decimal('subtotal', 11,2);
             $table->decimal('total', 11,2);

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
        Schema::dropIfExists('venta');
    }
}
