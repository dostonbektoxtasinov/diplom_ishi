<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xonalar extends Model
{
    use HasFactory;

    protected $table = 'xonalar';

    protected $fillable = [
        'hona_nomi',
        'rasm'
    ];
}
