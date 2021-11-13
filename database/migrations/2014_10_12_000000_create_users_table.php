<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('kode_user')->autoIncrement();
            $table->string('username', 15);
            $table->string('nama', 50);
            $table->string('jenis_kelamin', 25);
            $table->date('tanggal_lahir');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unique('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
