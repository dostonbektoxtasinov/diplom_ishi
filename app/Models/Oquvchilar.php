<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oquvchilar extends Model
{
    use HasFactory;


    protected $table = 'oquvchilars';

    protected $fillable = [
        'rasm',
        'ism_fam',
        'sinfi',
        'jinsi',
    ];

}
