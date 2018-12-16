<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineCheckpointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_checkpoint', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('line_id')->unsigned();
            $table->foreign('line_id')
                ->references('id')
                ->on('lines')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('checkpoint_id')->unsigned();
            $table->foreign('checkpoint_id')
                ->references('id')
                ->on('checkpoint')
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
        Schema::dropIfExists('line_checkpoint');
    }
}
