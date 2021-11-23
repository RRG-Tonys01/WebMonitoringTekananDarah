<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class Gejalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
       Schema::create('gejalas', function (Blueprint $table) {
        $table->string('kode_Gejala',25);
        $table->string('G_text',255);
        });
        // Insert some stuff
        DB::table('gejalas')->insert(
            array(
                [
                    'kode_Gejala' => 'G01',
                    'G_text' => 'Nilai Sistolik <120 mmHg'
                ],
                [
                    'kode_Gejala' => 'G02',
                    'G_text' => 'Nilai Diastolik<80 mmHg'
                ],
                [
                    'kode_Gejala' => 'G03',
                    'G_text' => 'Nilai Sistolik 121-130 mmHg'
                ],
                [
                    'kode_Gejala' => 'G04',
                    'G_text' => 'Nilai Diastolik 81 – 85 mmHg'
                ],
                [
                    'kode_Gejala' => 'G05',
                    'G_text' => 'Nilai Sistolik 130 – 139 mmHg'
                ],
                [
                    'kode_Gejala' => 'G06',
                    'G_text' => 'Nilai Diastolik 85-89 mmHg'
                ],
                [
                    'kode_Gejala' => 'G07',
                    'G_text' => 'Nilai Sistolik 140 - 159 mmHg'
                ],
                [
                    'kode_Gejala' => 'G08',
                    'G_text' => 'Nilai Diastolik 90 - 99 mmHg'
                ],
                [
                    'kode_Gejala' => 'G09',
                    'G_text' => 'Nilai Sistolik 160 - 179 mmHg'
                ],
                [
                    'kode_Gejala' => 'G10',
                    'G_text' => 'Nilai Diastolik 100 - 109 mmHg'
                ],
                [
                    'kode_Gejala' => 'G11',
                    'G_text' => 'Nilai Sistolik 180 - 220 mmHg'
                ],
                [
                    'kode_Gejala' => 'G12',
                    'G_text' => 'Nilai Diastolik 110 - 140 mmHg'
                ],
                [
                    'kode_Gejala' => 'G13',
                    'G_text' => 'Nilai Sistolik >220 mmHg'
                ],
                [
                    'kode_Gejala' => 'G14',
                    'G_text' => 'Nilai Diastolik >140 mmHg'
                ],
                [
                    'kode_Gejala' => 'G15',
                    'G_text' => 'Sakit Kepala'
                ],
                [
                    'kode_Gejala' => 'G16',
                    'G_text' => 'Gelisah'
                ],
                [
                    'kode_Gejala' => 'G17',
                    'G_text' => 'Pusing'
                ],
                [
                    'kode_Gejala' => 'G18',
                    'G_text' => 'Rasa Sakit Di dada'
                ],
                [
                    'kode_Gejala' => 'G19',
                    'G_text' => 'Mudah Lelah'
                ],
                [
                    'kode_Gejala' => 'G20',
                    'G_text' => 'Sering Asimptomatik'
                ],
                [
                    'kode_Gejala' => 'G21',
                    'G_text' => 'Sakit Kepala Berat'
                ],
                [
                    'kode_Gejala' => 'G22',
                    'G_text' => 'Napas Pendek'
                ],
                [
                    'kode_Gejala' => 'G23',
                    'G_text' => 'Nokturia'
                ],
                [
                    'kode_Gejala' => 'G24',
                    'G_text' => 'Disartria'
                ],
                [
                    'kode_Gejala' => 'G25',
                    'G_text' => 'Gangguan Kesadaran'
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
        Schema::dropIfExists('gejalas');
    }
}
