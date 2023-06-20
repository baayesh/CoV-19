<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class covid_19_detail extends Model
{
    use HasFactory;
    protected $table = 'covid_19_details';
    protected $fillable = [
        'local_new_cases',
        'local_total_cases',
        'number_of_individuals_in_hospitals',
        'local_deaths',
        'local_new_deaths',
        'local_recovered',
        'local_active_cases',
        'global_new_cases',
        'global_total_cases',
        'global_deaths',
        'global_new_deaths',
        'global_recovered',
        'total_pcr_testing_count',
    ];

}
