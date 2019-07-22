<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->string('obs');
            $table->unsignedBigInteger('equipament_id')->nullable();
            $table->timestamps();
        });

        Schema::table('maintences', function (Blueprint $table) {
            $table->foreign('equipament_id')
                        ->references('id')
                        ->on('equipaments')
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
        Schema::dropIfExists('maintences');
    }
}
