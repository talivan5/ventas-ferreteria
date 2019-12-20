<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_articulo')->unsigned();
            $table->integer('id_users')->unsigned();
            $table->integer('cantidad');
            $table->decimal('subtotal', 11,2);
            $table->decimal('total', 11,2);            

            $table->foreign('id_users')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        
            $table->foreign('id_articulo')->references('id')->on('articulo')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('detalle_ingreso');
    }
}
