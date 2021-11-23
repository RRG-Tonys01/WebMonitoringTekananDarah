<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->id();
            // $table->integer('kode_user')->autoIncrement();
            $table->string('username', 15);
            $table->string('nama', 50);
            $table->string('jenis_kelamin', 25);
            $table->date('tanggal_lahir');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unique('username');
        });
        DB::table('users')->insert(
            array(
                [
                    'username' => 'user',
                    'password' => '$2y$10$39vrrvzofm7T6FZhsEnzcOapT9RkuueDlNTjXqbXuRsHL0jF50.xe',
                    'nama' => 'admin super',
                    'jenis_kelamin' => 'helikopter',
                    'tanggal_lahir' => '2001-10-05'
                ],
                
            )
        );
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
