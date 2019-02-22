<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrevilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previleges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->boolean('affichage');
            $table->boolean('ajouter');
            $table->boolean('modifier');
            $table->boolean('supprimer');

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
        Schema::dropIfExists('previleges');
    }
}
