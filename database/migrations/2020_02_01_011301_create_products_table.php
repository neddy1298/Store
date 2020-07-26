<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->integer('price');
            $table->integer('new_price')->nullable();
            $table->string('spec');
            $table->integer('qty');
            $table->integer('sold')->default(0);
            $table->integer('view')->default(0);
            $table->string('img')->nullable();
            $table->longText('desc')->nullable();
            $table->enum('category',['phone','laptop','computer','earphone','smart_watch']);
            $table->text('color')->nullable();
            $table->string('status')->default('Available');
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
        Schema::dropIfExists('products');
    }
}
