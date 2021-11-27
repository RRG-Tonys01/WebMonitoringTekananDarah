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
        if (!Schema::hasTable('controls')) {
            Schema::create('controls', function (Blueprint $table) {
                $table->integer('id')->unsigned();
                $table->integer('siastolik');
                $table->integer('diastolik');
                $table->string('rulesID', 10);
                $table->date('tanggal');
                $table->timestamps();
                $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('rulesID')->references('rulesID')->on('rules');
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
        Schema::dropIfExists('controls');
    }
}
