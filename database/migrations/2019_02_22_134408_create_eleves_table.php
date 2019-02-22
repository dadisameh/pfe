<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('eleves', function (Blueprint $table) {
            $table->increments('Matricule');
            $table->date('DateNaissance');
            $table->integer('GSM');
            $table->string('sexe');
            $table->string('nom');
            $table->string('prenom');
            $table->string('login');
            $table->string('password');
            $table->string('adresse');
            $table->timestamps();
        });
        Schema::table('eleves', function (Blueprint $table) {
    $table->unsignedInteger('groupe_id');
    $table->unsignedInteger('niveau_id');

    $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');
$table->foreign('niveau_id')->references('idNiveau')->on('niveau_etudes')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
