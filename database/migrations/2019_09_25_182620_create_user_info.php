<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_info', function (Blueprint $table) {
          
            $table->bigIncrements('pin')->unique();
            $table->foreign('id') ->references('ID')->on('ssc_hsc_info') ->onDelete('cascade');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
    
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant_info');
    }
}
