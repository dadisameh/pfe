<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('idRole');
                        $table->string('role');

            $table->timestamps();
        });
        Schema::table('roles', function (Blueprint $table) {
    $table->unsignedInteger('tiers_id');
    $table->foreign('tiers_id')->references('idTiers')->on('tiers');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
