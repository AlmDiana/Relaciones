<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('datos');
        
            // Para relación uno a muchos
            $table->unsignedBigInteger('cliente_id')->unique(); //->nullable()

            $table->foreign('cliente_id')
                   ->references('id')
                   ->on('customers')
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
        Schema::dropIfExists('orders');
    }
}
