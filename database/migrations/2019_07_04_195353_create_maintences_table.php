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
            $table->Increments('id');
            $table->date('data');
            $table->string('obs');

                $table->integer('equipament_id')->unsigned();
                $table->foreign('equipament_id')->references('id')->on('equipaments');

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
        Schema::dropIfExists('maintences');
    }
}
