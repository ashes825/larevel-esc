<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsDesireSalarySpecializationPreviousPlaceWorkToCVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('c_v_s', function (Blueprint $table) {
            $table->string('specialization');
            $table->string('previousPlaceWork');
            $table->double('desireSalary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('c_v_s', function (Blueprint $table) {
            $table->string('specialization');
            $table->string('previousPlaceWork');
            $table->double('desireSalary');
        });
    }
}
