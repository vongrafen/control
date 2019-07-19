<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipamentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipament_histories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('equipament_id')->unsigned()->nullable();
            $table->foreign('equipament_id')
                ->references('id')
                ->on('equipaments')
                ->onDelete('cascade');

            $table->integer('departament_id')->unsigned()->nullable();
            $table->foreign('departament_id')
                ->references('id')
                ->on('departaments')
                ->onDelete('cascade');

            $table->text('old_name')->nullable();
            $table->text('old_departament')->nullable();
            $table->date('date')->nullable();


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
        Schema::dropIfExists('equipament_histories');
    }
}
