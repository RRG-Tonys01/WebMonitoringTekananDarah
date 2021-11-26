<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Clarifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $kode = array(
            'K01', 'K02', 'K03', 'K04', 'K05', 'K06', 'K07', 'K08'
        );

        $nama = array(
            'Optimal', 'Normal', 'Pra Hipertensi',
            'Hipertensi Derajat I', 'Hipertensi Derajat II',
            'Hipertensi Urgensi Asimtomatik', 'Hipertensi Urgensi Simtomatik',
            'Hipertensi Emergensi'
        );

        if (!Schema::hasTable('clarifications')) {
            Schema::create('clarifications', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->string('c_kode', 25)->index();
                $table->string('c_nama', 255);
                $table->timestamps();
            });

            $i = 0;

            foreach ($kode as $k_kode) {
                DB::table('clarifications')->insert(
                    [
                        'c_kode' => $k_kode,
                        'c_nama' => $nama[$i]
                    ]
                );
                $i++;
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
