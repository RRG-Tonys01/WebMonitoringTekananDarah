<?php

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
        $kode_gejala = array(
            'G01', 'G02',
            'G03', 'G04',
            'G05', 'G06', 'G17',
            'G07', 'G08', 'G15', 'G17',
            'G09', 'G10', 'G15', 'G16', 'G17',
            'G11', 'G12', 'G15', 'G16', 'G20',
            'G11', 'G12', 'G21', 'G22',
            'G13', 'G14', 'G18', 'G22', 'G23', 'G24', 'G25'
        );

        $next = array(
            'G02', 'K01', 'G04', 'K02', 'G06', 'G17', 'K03', 'G08', 'G15', 'G17', 'K04',
            'G10', 'G15', 'G16', 'G17', 'K06', 'G12', 'G15', 'G16', 'G20', 'K06', 'G12',
            'G21', 'G22', 'K07', 'G14', 'G18', 'G18', 'G22', 'G23', 'G24', 'K08'
        );

        if (!Schema::hasTable('rules')) {
            Schema::create('rules', function (Blueprint $table) {
                $table->string('gejala', 25);
                $table->string('g_next', 25);
            });

            $i = 0;

            foreach ($kode_gejala as $gejala) {
                DB::table('rules')->insert(
                    [
                        'gejala' => $gejala,
                        'g_next' => $next[$i]
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
        Schema::dropIfExists('rules');
    }
}
