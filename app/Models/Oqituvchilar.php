<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oqituvchilar extends Model
{
    use HasFactory;

    protected $table = 'oqituvchilars';

    protected $fillable = [
        'rasm',
        'ism',
        'fan'
    ];
}
