<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendriers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('DateJour');
            $table->date('DateDebut');
            $table->date('DateFin');
            $table->timestamps();
        });
        Schema::table('calendriers', function (Blueprint $table) {
    $table->unsignedInteger('matiere_id');
    $table->foreign('matiere_id')->references('idMatiere')->on('matieres');
    
$table->foreign('salle_id')->references('idSalle')->on('salles');
$table->unsignedInteger('salle_id');

 $table->unsignedInteger('instituteur_id');
 $table->foreign('instituteur_id')->references('cin')->on('instituteurs');

});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendriers');
    }
}
