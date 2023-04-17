<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maqol extends Model
{
    use HasFactory;

    protected $table = 'maqols';

    protected $fillable = [
        'rasm',
        'maqollar'
    ];

}
