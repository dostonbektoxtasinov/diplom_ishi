<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BizHaqimizda extends Model
{
    use HasFactory;
    protected $table = "biz-haqimizdas";

    
    protected $fillable = [
        'dars_ertalab',
        'dars_kech',
        'lokatsiya',
        'nomer',
        'email',
    ];
}
