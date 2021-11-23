<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Controls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->integer('kode_user');
            $table->integer('tkn_siastolik');
            $table->integer('berat_badan');
            $table->integer('tkn_diastolik');
            $table->string('kode_status', 10);
            // $table->timestamps();
            // $table->foreign('kode_user')->references('id')->on('users');
            // $table->foreign('kode_status')->references('kode_status')->on('stats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controls');
    }
}
