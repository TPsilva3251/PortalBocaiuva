<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');;
            $table->longText('descricao');
            $table->longText('localizacao');
            $table->longText('face');
            $table->longText('insta');
            $table->string('whats');
            $table->string('email');
            $table->longText('img');
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
        Schema::dropIfExists('partners');
    }
}
