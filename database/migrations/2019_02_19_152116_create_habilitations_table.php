<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitations', function (Blueprint $table) {
            
            $table->timestamps();
        });
        Schema::table('habilitations', function (Blueprint $table) {
    $table->unsignedInteger('role_id');
    $table->foreign('role_id')->references('idRole')->on('roles');
    $table->unsignedInteger('privilege_id');
$table->foreign('privilege_id')->references('id')->on('previleges');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilitations');
    }
}
