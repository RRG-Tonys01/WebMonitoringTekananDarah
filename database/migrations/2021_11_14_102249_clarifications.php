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
            'K01', 'K02', 'K03', 'K04', 'K05', 'K06', 'K07', 'K08', 'K03m', 'K04m', 'K05m', 'K08m','K00'
        );

        $nama = array(
            'Optimal',
            'Normal',
            'Pra Hipertensi',
            'Hipertensi Derajat I',
            'Hipertensi Derajat II',
            'Hipertensi Urgensi Asimtomatik',
            'Hipertensi Urgensi Simtomatik',
            'Hipertensi Emergensi',
            'Mungkin Pra Hipertensi',//mungkin
            'Mungkin Hipertensi Derajat I',
            'Mungkin Hipertensi Derajat II',
            'Mungkin Hipertensi Emergensi',
            'Data hasil tidak ditemukan'
        );

        $desc = array(
            'tekanan darah anda dalam keadaan optimal, jaga terus pola hidup dan makan anda agar kondisi ini tetap terjaga',
            'tekanan darah anda dalam keadaan optimal, jaga terus pola hidup dan makan anda agar kondisi ini tetap terjaga',
            'tekanan darah anda sedikit lebih tinggi dari tekanan darah normal, coba perbaiki pola makan dan pola tidur anda',
            'tekanan darah anda tergolong tinggi, coba tenangkan diri dan perbanyak istirahat untuk memperbaiki kondisi ini',
            'tekanan darah anda tinggi, lakukan pengecekan secara berkala agar dapat terhindar dari penyakit serius yang dapat timbul',
            'tekanan darah anda sangat tinggi, segera lakukan pengecekan ke dokter!',
            'tekanan darah anda sangat tinggi, segera lakukan pengecekan ke dokter!',
            'tekanan darah anda sangat tinggi, segera lakukan pengecekan ke dokter!',
            'tekanan darah anda sedikit lebih tinggi dari tekanan darah normal, coba perbaiki pola makan dan pola tidur anda',//mungkin
            'tekanan darah anda tergolong tinggi, coba tenangkan diri dan perbanyak istirahat untuk memperbaiki kondisi ini',
            'tekanan darah anda tinggi, lakukan pengecekan secara berkala agar dapat terhindar dari penyakit serius yang dapat timbul',
            'tekanan darah anda sangat tinggi, segera lakukan pengecekan ke dokter!',
            'Harap cek tekanan darah yang di masukan sudah benar'
        );
        $article = array(
            'https://www.halodoc.com/artikel/cara-tepat-menjaga-tekanan-darah-tetap-normal',
            'https://www.halodoc.com/artikel/cara-tepat-menjaga-tekanan-darah-tetap-normal',
            'https://www.halodoc.com/artikel/pertolongan-pertama-saat-tekanan-darah-melonjak',
            'https://hellosehat.com/jantung/hipertensi/cara-menurunkan-tekanan-darah/',
            'https://www.alodokter.com/ingin-menurunkan-tekanan-darah-ikuti-langkah-langkah-berikut-ini',
            'https://www.alodokter.com/hipertensi-emergensi-kondisi-darurat-yang-harus-segera-ditangani',
            'https://www.alodokter.com/hipertensi-emergensi-kondisi-darurat-yang-harus-segera-ditangani',
            'https://www.alodokter.com/hipertensi-emergensi-kondisi-darurat-yang-harus-segera-ditangani',
            'https://www.halodoc.com/artikel/pertolongan-pertama-saat-tekanan-darah-melonjak',//mungkin
            'https://hellosehat.com/jantung/hipertensi/cara-menurunkan-tekanan-darah/',
            'https://www.alodokter.com/ingin-menurunkan-tekanan-darah-ikuti-langkah-langkah-berikut-ini',
            'https://www.alodokter.com/hipertensi-emergensi-kondisi-darurat-yang-harus-segera-ditangani',
            '#'
        );

        if (!Schema::hasTable('clarifications')) {
            Schema::create('clarifications', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->string('c_kode', 25)->index();
                $table->string('c_nama', 255);
                $table->string('c_desc', 255);
                $table->string('c_href', 255);
                $table->timestamps();
            });

            $i = 0;

            foreach ($kode as $k_kode) {
                DB::table('clarifications')->insert(
                    [
                        'c_kode' => $k_kode,
                        'c_nama' => $nama[$i],
                        'c_desc' => $desc[$i],
                        'c_href' => $article[$i]
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
        Schema::dropIfExists('clarifications');
    }
}
