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

        if (!Schema::hasTable('rules')) {
            Schema::create('rules', function (Blueprint $table) {
                $table->integer('K_id');
                $table->integer('G01');
                $table->integer('G02');
                $table->integer('G03');
                $table->integer('G04');
                $table->integer('G05');
                $table->integer('G06');
                $table->integer('G07');
                $table->integer('G08');
                $table->integer('G09');
                $table->integer('G10');
                $table->integer('G11');
                $table->integer('G12');
                $table->integer('G13');
                $table->integer('G14');
                $table->integer('G15');
                $table->integer('G16');
                $table->integer('G17');
                $table->integer('G18');
                $table->integer('G19');
                $table->integer('G20');
                $table->integer('G21');
                $table->integer('G22');
                $table->integer('G23');
                $table->integer('G24');
                $table->integer('G25');
            });

            DB::table('rules')->insert(
                array(
                    [
                        'K_id' => 1,
                        'G01' => 1,
                        'G02' => 1,
                        'G03' => 0,
                        'G04' => 0,
                        'G05' => 0,
                        'G06' => 0,
                        'G07' => 0,
                        'G08' => 0,
                        'G09' => 0,
                        'G10' => 0,
                        'G11' => 0,
                        'G12' => 0,
                        'G13' => 0,
                        'G14' => 0,
                        'G15' => 0,
                        'G16' => 0,
                        'G17' => 0,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 0,
                        'G21' => 0,
                        'G22' => 0,
                        'G23' => 0,
                        'G24' => 0,
                        'G25' => 0
                    ],
                    [
                        'K_id' => 2,
                        'G01' => 0,
                        'G02' => 0,
                        'G03' => 1,
                        'G04' => 1,
                        'G05' => 0,
                        'G06' => 0,
                        'G07' => 0,
                        'G08' => 0,
                        'G09' => 0,
                        'G10' => 0,
                        'G11' => 0,
                        'G12' => 0,
                        'G13' => 0,
                        'G14' => 0,
                        'G15' => 0,
                        'G16' => 0,
                        'G17' => 0,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 0,
                        'G21' => 0,
                        'G22' => 0,
                        'G23' => 0,
                        'G24' => 0,
                        'G25' => 0
                    ],
                    [
                        'K_id' => 3,
                        'G01' => 0,
                        'G02' => 0,
                        'G03' => 0,
                        'G04' => 0,
                        'G05' => 1,
                        'G06' => 1,
                        'G07' => 0,
                        'G08' => 0,
                        'G09' => 0,
                        'G10' => 0,
                        'G11' => 0,
                        'G12' => 0,
                        'G13' => 0,
                        'G14' => 0,
                        'G15' => 0,
                        'G16' => 0,
                        'G17' => 1,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 0,
                        'G21' => 0,
                        'G22' => 0,
                        'G23' => 0,
                        'G24' => 0,
                        'G25' => 0
                    ],
                    [
                        'K_id' => 4,
                        'G01' => 0,
                        'G02' => 0,
                        'G03' => 0,
                        'G04' => 0,
                        'G05' => 0,
                        'G06' => 0,
                        'G07' => 1,
                        'G08' => 1,
                        'G09' => 0,
                        'G10' => 0,
                        'G11' => 0,
                        'G12' => 0,
                        'G13' => 0,
                        'G14' => 0,
                        'G15' => 1,
                        'G16' => 0,
                        'G17' => 1,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 0,
                        'G21' => 0,
                        'G22' => 0,
                        'G23' => 0,
                        'G24' => 0,
                        'G25' => 0
                    ],
                    [
                        'K_id' => 5,
                        'G01' => 0,
                        'G02' => 0,
                        'G03' => 0,
                        'G04' => 0,
                        'G05' => 0,
                        'G06' => 0,
                        'G07' => 0,
                        'G08' => 0,
                        'G09' => 1,
                        'G10' => 1,
                        'G11' => 0,
                        'G12' => 0,
                        'G13' => 0,
                        'G14' => 0,
                        'G15' => 1,
                        'G16' => 1,
                        'G17' => 1,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 0,
                        'G21' => 0,
                        'G22' => 0,
                        'G23' => 0,
                        'G24' => 0,
                        'G25' => 0
                    ],
                    [
                        'K_id' => 6,
                        'G01' => 0,
                        'G02' => 0,
                        'G03' => 0,
                        'G04' => 0,
                        'G05' => 0,
                        'G06' => 0,
                        'G07' => 0,
                        'G08' => 0,
                        'G09' => 0,
                        'G10' => 0,
                        'G11' => 1,
                        'G12' => 1,
                        'G13' => 0,
                        'G14' => 0,
                        'G15' => 1,
                        'G16' => 1,
                        'G17' => 0,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 1,
                        'G21' => 0,
                        'G22' => 0,
                        'G23' => 0,
                        'G24' => 0,
                        'G25' => 0
                    ],
                    [
                        'K_id' => 7,
                        'G01' => 0,
                        'G02' => 0,
                        'G03' => 0,
                        'G04' => 0,
                        'G05' => 0,
                        'G06' => 0,
                        'G07' => 0,
                        'G08' => 0,
                        'G09' => 0,
                        'G10' => 0,
                        'G11' => 1,
                        'G12' => 1,
                        'G13' => 0,
                        'G14' => 0,
                        'G15' => 0,
                        'G16' => 0,
                        'G17' => 0,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 0,
                        'G21' => 1,
                        'G22' => 1,
                        'G23' => 0,
                        'G24' => 0,
                        'G25' => 0
                    ],
                    [
                        'K_id' => 8,
                        'G01' => 0,
                        'G02' => 0,
                        'G03' => 0,
                        'G04' => 0,
                        'G05' => 0,
                        'G06' => 0,
                        'G07' => 0,
                        'G08' => 0,
                        'G09' => 0,
                        'G10' => 0,
                        'G11' => 0,
                        'G12' => 0,
                        'G13' => 1,
                        'G14' => 1,
                        'G15' => 0,
                        'G16' => 0,
                        'G17' => 0,
                        'G18' => 0,
                        'G19' => 0,
                        'G20' => 0,
                        'G21' => 0,
                        'G22' => 1,
                        'G23' => 1,
                        'G24' => 1,
                        'G25' => 1
                    ]
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
        Schema::dropIfExists('rules');
    }
}
