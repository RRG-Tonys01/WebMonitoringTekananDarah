<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class Klasifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
       Schema::create('klasifikasi', function (Blueprint $table) {
        $table->string('kode_klasifikasi',25);
        $table->string('K_text',255);
        });
        // Insert some stuff
        DB::table('klasifikasi')->insert(
            array(
                [
                    'kode_klasifikasi' => 'K01',
                    'K_text' => 'Optimal'
                ],
                [
                    'kode_klasifikasi' => 'K02',
                    'K_text' => 'Normal'
                ],
                [
                    'kode_klasifikasi' => 'K03',
                    'K_text' => 'Pra Hipertensi'
                ],
                [
                    'kode_klasifikasi' => 'K04',
                    'K_text' => 'Hipertensi Derajat I'
                ],
                [
                    'kode_klasifikasi' => 'K05',
                    'K_text' => 'Hipertensi Derajat II'
                ],
                [
                    'kode_klasifikasi' => 'K06',
                    'K_text' => 'Hipertensi Urgensi Asimtomatik'
                ],
                [
                    'kode_klasifikasi' => 'K07',
                    'K_text' => 'Hipertensi Urgensi Sistomatik'
                ],
                [
                    'kode_klasifikasi' => 'K08',
                    'K_text' => 'Hipertensi Emeregensi'
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
        //
        Schema::dropIfExists('klasifikasi');
    }
}
