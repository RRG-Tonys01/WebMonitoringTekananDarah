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
        Schema::create('rules', function (Blueprint $table) {
            $table->string('gejala',25);
            $table->string('gejala_next',25);
            });
            // Insert some stuff
            DB::table('rules')->insert(
                array(
                    [
                        'gejala' => 'G01',
                        'gejala_next' => 'G02'
                    ],
                    [
                        'gejala' => 'G02',
                        'gejala_next' => 'K01'
                    ],
                    //2
                    [
                        'gejala' => 'G03',
                        'gejala_next' => 'G04'
                    ],
                    [
                        'gejala' => 'G04',
                        'gejala_next' => 'K02'
                    ],
                    //3
                    [
                        'gejala' => 'G05',
                        'gejala_next' => 'G06'
                    ],
                    [
                        'gejala' => 'G06',
                        'gejala_next' => 'G17'
                    ],
                    [
                        'gejala' => 'G17',
                        'gejala_next' => 'K03'
                    ],
                    //4
                    [
                        'gejala' => 'G07',
                        'gejala_next' => 'G08'
                    ],
                    [
                        'gejala' => 'G08',
                        'gejala_next' => 'G15'
                    ],
                    [
                        'gejala' => 'G15',
                        'gejala_next' => 'G17'
                    ],
                    [
                        'gejala' => 'G17',
                        'gejala_next' => 'K04'
                    ],
                    //5
                    [
                        'gejala' => 'G09',
                        'gejala_next' => 'G10'
                    ],
                    [
                        'gejala' => 'G10',
                        'gejala_next' => 'G15'
                    ],
                    [
                        'gejala' => 'G15',
                        'gejala_next' => 'G16'
                    ],
                    [
                        'gejala' => 'G16',
                        'gejala_next' => 'G17'
                    ],
                    [
                        'gejala' => 'G17',
                        'gejala_next' => 'K06'
                    ],
                    //6
                    [
                        'gejala' => 'G11',
                        'gejala_next' => 'G12'
                    ],
                    [
                        'gejala' => 'G12',
                        'gejala_next' => 'G15'
                    ],
                    [
                        'gejala' => 'G15',
                        'gejala_next' => 'G16'
                    ],
                    [
                        'gejala' => 'G16',
                        'gejala_next' => 'G20'
                    ],
                    [
                        'gejala' => 'G20',
                        'gejala_next' => 'K06'
                    ],
                    //7
                    [
                        'gejala' => 'G11',
                        'gejala_next' => 'G12'
                    ],
                    [
                        'gejala' => 'G12',
                        'gejala_next' => 'G21'
                    ],
                    [
                        'gejala' => 'G21',
                        'gejala_next' => 'G22'
                    ],
                    [
                        'gejala' => 'G22',
                        'gejala_next' => 'K07'
                    ],
                    //8
                    [
                        'gejala' => 'G13',
                        'gejala_next' => 'G14'
                    ],
                    [
                        'gejala' => 'G14',
                        'gejala_next' => 'G18'
                    ],
                    [
                        'gejala' => 'G18',
                        'gejala_next' => 'G22'
                    ],
                    [
                        'gejala' => 'G22',
                        'gejala_next' => 'G23'
                    ],
                    [
                        'gejala' => 'G23',
                        'gejala_next' => 'G24'
                    ],
                    [
                        'gejala' => 'G25',
                        'gejala_next' => 'K08'
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
    }
}
