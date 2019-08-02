<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('departaments', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('sigla');
            $table->string('name')->unique();
            $table->unsignedInteger('unity_id');
            $table->integer('cost_center')->unique();
            $table->timestamps();
        });

        Schema::table('departaments', function (Blueprint $table) {
            $table->foreign('unity_id')
                        ->references('id')
                        ->on('unities')
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
        Schema::dropIfExists('departaments');
    }
}
