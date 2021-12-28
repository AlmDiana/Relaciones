<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processors', function (Blueprint $table) {
            $table->id();
            $table->string('modelos');
            $table->string('num_nucleos');
            $table->string('tam_cache');

            // Para relación uno a uno
            $table->unsignedBigInteger('computer_id')->unique(); //->nullable()

            $table->foreign('computer_id')
                   ->references('id')
                   ->on('computers')
                   ->onDelete('cascade')
                   ->onUpdate('cascade'); // set null

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
        Schema::dropIfExists('processors');
    }
}
