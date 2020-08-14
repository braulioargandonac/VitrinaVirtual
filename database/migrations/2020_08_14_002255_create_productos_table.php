<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->string('precio');
            $table->boolean('de pago');
            $table->string('precioXmayor')->nullable();
            $table->mediumText('descripcion')->nullable();//longText
            $table->timestamps();
            ////////////RELACIONES//////////////////////
            //$table->unsignedInteger('categoria_id'); // Relación con categorias
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
