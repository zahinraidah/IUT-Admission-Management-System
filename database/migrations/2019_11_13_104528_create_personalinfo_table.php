<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalinfo', function (Blueprint $table) {
             $table->bigIncrements('ID')->unique();
            $table->bigInteger('contact_no');
            $table->string('email');
            $table->Integer('SSCroll');
            $table->Integer('SSCPassingYear');
            $table->string('SSCBoard');
            $table->Integer('HSCroll');
            $table->Integer('HSCPassingYear');
            $table->string('HSCBoard');
            $table->Integer('Reg_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personalinfo');
    }
}
