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

            $table->integer('equipament_id')->unsigned();
            $table->foreign('equipament_id')
                ->references('id')
                ->on('equipaments')
                ->onDelete('cascade');

            $table->integer('departament_id')->unsigned();
            $table->foreign('departament_id')
                ->references('id')
                ->on('departaments')
                ->onDelete('cascade');

            $table->text('new_name')->nullable();

            $table->text('new_departament')->nullable();

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

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
