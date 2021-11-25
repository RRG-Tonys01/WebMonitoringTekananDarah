<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('stats')) {
            Schema::create('stats', function (Blueprint $table) {
                $table->string('kode_status', 10);
                $table->string('nama_status', 50);
                $table->integer('sistolik_minimum');
                $table->integer('sistolik_maxmimum');
                $table->integer('diastolik_minimum');
                $table->integer('diastolik_maxmimum');
                $table->timestamps();
                $table->primary('kode_status');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
