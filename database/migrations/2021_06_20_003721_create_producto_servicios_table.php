<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_servicio', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('servicio_id');
            $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')
                    ->onDelete('restrict')
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
        Schema::dropIfExists('producto_servicios');
    }
}
