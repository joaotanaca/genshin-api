<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaSetsArtifact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets_artifact', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('2_piece');
            $table->string('4_piece')->default('');
            $table->integer('artifact');

            $table->foreign('artifact')->references('artifact')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sets_artifact');
    }
}
