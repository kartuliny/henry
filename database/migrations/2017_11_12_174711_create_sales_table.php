<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->integer('sede_id')->unsigned();
            $table->integer('user_id');
            $table->boolean('state')->default(0);
            $table->double('monto');
            $table->integer('user_create');
            $table->date('fech_sale');

            $table->foreign('person_id')
                ->references('id')->on('people')
                ->onDelete('cascade');
            $table->foreign('sede_id')
                ->references('id')->on('sedes')
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
        Schema::dropIfExists('sales');
    }
}
