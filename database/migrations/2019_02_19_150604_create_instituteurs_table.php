<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituteurs', function (Blueprint $table) {
            $table->increments('cin');
            $table->string('email');
            $table->string('grade');
            $table->string('sexe');
            $table->string('nom');
            $table->string('prenom');
            $table->string('login');
            $table->string('password');
            $table->string('adresse');

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
        Schema::dropIfExists('instituteurs');
    }
}
