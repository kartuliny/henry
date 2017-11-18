<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->string('description',110);
            $table->integer('stock')->nullable();
            $table->double('precio_compra')->nullable();
            $table->double('precio_venta')->nullable();
            $table->boolean('state')->default(1);
            $table->integer('user_create');
            $table->integer('user_modi');
            $table->timestamp('fech_create')->nullable();
            $table->timestamp('fech_modi')->nullable();
            $table->foreign('brand_id')
                ->references('id')->on('brands')
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
        Schema::dropIfExists('products', function (Blueprint $table){
            $table->dropForeign('brand_id');
        });
    }
}
