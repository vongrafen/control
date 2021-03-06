<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patrimony')->unique();
            $table->string('name')->unique();
            $table->string('so')->nullable();
            $table->string('arquiteture')->nullable();
            $table->string('pc_brand')->nullable();
            $table->string('pc_model')->nullable();
            $table->string('service_tag')->nullable();
            $table->string('partnumber')->nullable()->unique();
            $table->string('proc_brand')->nullable();
            $table->string('proc')->nullable();
            $table->string('proc_hz')->nullable();
            $table->string('memory')->nullable();
            $table->string('memory_ddr')->nullable();
            $table->string('memory_frequency')->nullable();
            $table->integer('qtd_slots')->nullable();
            $table->integer('memory_slots')->nullable();
            $table->integer('disk')->nullable();
            $table->string('disk_type')->nullable();
            $table->string('user')->nullable();         
            $table->unsignedBigInteger('departament_id')->nullable();
            $table->unsignedInteger('unity_id')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();

        });

        Schema::table('equipaments', function (Blueprint $table) {
            $table->foreign('departament_id')
                        ->references('id')
                        ->on('departaments')
                        ->onDelete('cascade');
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
        Schema::dropIfExists('equipaments');
    }
}
