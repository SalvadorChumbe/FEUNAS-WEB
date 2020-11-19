<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    public function up(){
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');
            $table->string('title',255);
            $table->text('descripcion');
            $table->string('color',20);
            $table->string('textColor',20);
            $table->dateTime('start');
            $table->string('end');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
