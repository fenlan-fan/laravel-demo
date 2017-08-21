<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('书名');
            $table->string('author')->comment('作者');
            $table->integer('amount')->comment('库存');
            $table->string('brief')->comment('图书简介');
            $table->string('keywords')->comment('图书关键词');
            $table->string('image')->comment('图书路径');
            $table->integer('price')->comment('价格');
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
        Schema::drop('books');
    }
}
