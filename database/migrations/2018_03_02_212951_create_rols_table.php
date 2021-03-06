<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolsTable extends Migration
{

    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',15)->nullable();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
