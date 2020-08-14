<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRRSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_r_s_s', function (Blueprint $table) {
            $table->id();
            $table->mediumText('instagram')->nullable(); //type por definir
            $table->mediumText('Facebook')->nullable(); //type por definir
            $table->mediumText('Twitter')->nullable(); //type por definir
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
        Schema::dropIfExists('r_r_s_s');
    }
}
