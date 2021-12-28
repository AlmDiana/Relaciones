<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_peliculas');
        
            // Para relación uno a muchos
            $table->unsignedBigInteger('cliente_movies_id')->unique(); //->nullable()

            $table->foreign('cliente_movies_id')
                   ->references('id')
                   ->on('customer_movies')
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
        Schema::dropIfExists('tickets');
    }
}
