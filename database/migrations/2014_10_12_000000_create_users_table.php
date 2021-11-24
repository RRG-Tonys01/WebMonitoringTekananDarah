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
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('username', 15);
                $table->string('nama', 50);
                $table->string('jenis_kelamin', 25);
                $table->date('tanggal_lahir');
                $table->string('password');
                $table->timestamps();
                $table->unique('username');
            });

            DB::table('users')->insert(
                array(
                    [
                        'username' => 'user',
                        'nama' => 'User',
                        'jenis_kelamin' => 'Laki-Laki',
                        'tanggal_lahir' => '2001-10-05',
                        'password' => bcrypt('user123')
                    ],
                )
            );
        }
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
