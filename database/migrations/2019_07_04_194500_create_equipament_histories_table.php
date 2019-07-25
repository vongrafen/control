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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('equipament_id')->nullable();
            $table->unsignedBigInteger('departament_id')->nullable();
            $table->string('old_name')->nullable();
            $table->string('new_name')->nullable();
            $table->integer('old_departament')->nullable();
            $table->integer('new_departament')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });

        Schema::table('equipament_histories', function (Blueprint $table) {

            $table->foreign('equipament_id')
                ->references('id')
                ->on('equipaments')
                ->onDelete('cascade');

            $table->foreign('departament_id')
                ->references('id')
                ->on('departaments')
                ->onDelete('cascade');

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
