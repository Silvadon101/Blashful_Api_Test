<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('Name');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Adults');
            $table->string('Services');
            $table->string('Date');
            $table->string('Time');
            $table->string('Info');
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
        Schema::dropIfExists('tempinfos');
    }
}
