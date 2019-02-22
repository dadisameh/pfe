<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
           
            $table->timestamps();
        });
        Schema::table('affectations', function (Blueprint $table) {
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
        Schema::dropIfExists('affectations');
    }
}
