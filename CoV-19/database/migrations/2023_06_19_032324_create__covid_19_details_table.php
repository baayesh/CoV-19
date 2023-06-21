<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // Creatng a table
    public function up(): void
    {
       Schema::create('covid_19_details', function(Blueprint $table) {
        $table->increments('id');
        $table -> integer('local_new_cases');
        $table -> integer('local_total_cases');
        $table -> integer('number_of_individuals_in_hospitals');
        $table -> integer('local_deaths');
        $table -> integer('local_new_deaths');
        $table -> integer('local_recovered');
        $table -> integer('local_active_cases');
        $table -> integer('global_new_cases');
        $table -> integer('global_total_cases');
        $table -> integer('global_deaths');
        $table -> integer('global_new_deaths');
        $table -> integer('global_recovered');
        $table -> integer('total_pcr_testing_count');
        $table -> timestamp('last_used_at')->nullable();
        $table -> timestamp('expires_at')->nullable();
        $table -> timestamps();

       }); 
    }


    public function down(): void
    {
        Schema::dropIfExists('covid_19_details');
    }
};
