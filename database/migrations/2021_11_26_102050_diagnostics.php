<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class Diagnostics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $kode = array(
            'G01', 'G02', 'G03', 'G04', 'G05',
            'G06', 'G07', 'G08', 'G09', 'G10',
            'G11', 'G12', 'G13', 'G14', 'G15',
            'G16', 'G17', 'G18', 'G19', 'G20',
            'G21', 'G22', 'G23', 'G24', 'G25'
        );

        $nama = array(
            'Nilai Sistolik  < 120 mmHg',
            'Nilai Diastolik < 80 mmHg',
            'Nilai Sistolik 121-130 mmHg',
            'Nilai Diastolik 81 – 85 mmHg',
            'Nilai Sistolik 130 – 139 mmHg',
            'Nilai Diastolik 85-89 mmHg',
            'Nilai Sistolik 140 - 159 mmHg',
            'Nilai Diastolik 90 - 99 mmHg',
            'Nilai Sistolik 160 - 179 mmHg',
            'Nilai Diastolik 100 - 109 mmHg',
            'Nilai Sistolik 180 - 220 mmHg',
            'Nilai Diastolik 110 - 140 mmHg',
            'Nilai Sistolik >220 mmHg',
            'Nilai Diastolik >140 mmHg',
            'Sakit Kepala',
            'Gelisah',
            'Pusing',
            'Rasa Sakit Di dada',
            'Mudah Lelah',
            'Sering Asimptomatik',
            'Sakit Kepala Berat',
            'Napas Pendek',
            'Nokturia',
            'Disatria',
            'Gangguan Kesadaran'
        );



        if (!Schema::hasTable('diagnostics')) {
            Schema::create('diagnostics', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->string('d_kode', 25)->index();
                $table->string('d_nama', 255);
            });

            $i = 0;

            foreach ($kode as $kode_gejala) {
                DB::table('diagnostics')->insert(
                    [
                        'd_kode' => $kode_gejala,
                        'd_nama' => $nama[$i]
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
        Schema::dropIfExists('diagnostics');
    }
}
