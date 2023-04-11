<?php

namespace App\Http\Controllers;

use App\Models\Maqol;
use Illuminate\Http\Request;

class AsosiyController extends Controller
{
    public function indexAsosiy()
    {
        $posts = Maqol::all();
        
        return view('index')->with('posts', $posts);

    }
}
