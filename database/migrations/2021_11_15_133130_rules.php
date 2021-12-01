<?php

use App\Models\Rule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Rules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $id = array(
            'R01', 'R02', 'R03', 'R04',
            'R05', 'R06', 'R07', 'R08',
            'R03m', 'R04m', 'R05m', 'R08m','None'
        );

        $kode = array(
            'K01', 'K02', 'K03', 'K04',
            'K05', 'K06', 'K07', 'K08',
            'K03m', 'K04m', 'K05m', 'K08m','K00'
        );

        $gejala = array(
            'G01, G02',
            'G03, G04',
            'G05, G06, G17',
            'G07, G08, G15, G17',
            'G09, G10, G15, G16, G17',
            'G11, G12, G15, G16, G20',
            'G11, G12, G21, G22',
            'G13, G14, G18, G22, G23, G24, G25',
            'G05, G06',
            'G07, G08',
            'G09, G10',
            'G13, G14',''
        );

        if (!Schema::hasTable('rules')) {
            Schema::create('rules', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->string('rulesID', 10)->index();
                $table->string('c_kode', 10);
                $table->string('d_code', 255);
                $table->timestamps();
                $table->foreign('c_kode')->references('c_kode')->on('clarifications');
            });

            $i = 0;
            foreach($id as $rule){
                DB::table('rules')->insert(
                    [
                        'rulesID' => $rule,
                        'c_kode' => $kode[$i],
                        'd_code' => $gejala[$i]
                    ]
                );
                $i++;
            }
            // foreach ($id as $rule) {
            //     if ($rule == 'R01') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G01, G02'
            //             ]
            //         );
            //         $i++;
            //     } elseif ($rule == 'R02') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G03, G04'
            //             ]
            //         );
            //         $i++;
            //     } elseif ($rule == 'R03') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G05, G06, G17'
            //             ]
            //         );
            //         $i++;
            //     } elseif ($rule == 'R04') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G07, G08, G15, G17'
            //             ]
            //         );
            //         $i++;
            //     } elseif ($rule == 'R05') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G09, G10, G15, G16, G17'
            //             ]
            //         );
            //         $i++;
            //     } elseif ($rule == 'R06') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G11, G12, G15, G16, G20'
            //             ]
            //         );
            //         $i++;
            //     } elseif ($rule == 'R07') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G11, G12, G21, G22'
            //             ]
            //         );
            //         $i++;
            //     } elseif ($rule == 'R08') {
            //         DB::table('rules')->insert(
            //             [
            //                 'rulesID' => $rule,
            //                 'c_kode' => $kode[$i],
            //                 'd_code' => 'G13, G14, G18, G22, G23, G24, G25'
            //             ]
            //         );
            //         $i++;
            //     }
            // }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
