<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaWeapon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('base_atk');
            $table->string('rarity');
            $table->json('unique_attribute');
            $table->integer('character');

            $table->foreign('character')->references('characters')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
}
