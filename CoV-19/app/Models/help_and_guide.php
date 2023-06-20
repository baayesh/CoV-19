<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class help_and_guide extends Model
{
    use HasFactory;
    protected $table = 'help_and_guides';
    protected $fillable =[
        'link',
        'description',
        'user'

    ];
}
