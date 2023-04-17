<?php

namespace App\Http\Controllers;

use App\Models\BizHaqimizda;
use App\Models\Forma;
use App\Models\Maqol;
use App\Models\Oqituvchilar;
use App\Models\Oquvchilar;
use App\Models\Xonalar;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Maqol::all();
        $oqituvchilars = Oqituvchilar::all();
        $formas = Forma::all();
        $xonalar = Xonalar::all();
        $bizlar = BizHaqimizda::all();
        $oquvchilars = Oquvchilar::all();
        //count
        $oquvchi = Oquvchilar::all()->count();
        $oqituvchi = Oqituvchilar::all()->count();
        $ayol = Oquvchilar::where('jinsi', 'Ayol')->get()->count();
        $erkak = Oquvchilar::where("jinsi", "Erkak")->get()->count();   

        return view('index')->with([
            'posts' => $posts,
            'oqituvchilars' => $oqituvchilars,
            'formas' => $formas,
            'xonalar' => $xonalar,
            'bizlar' => $bizlar,
            'oquvchilars' => $oquvchilars,
            // count
            'erkak' =>$erkak,
            'ayol' => $ayol,
            'oqituvchi' => $oqituvchi,
            'oquvchi' => $oquvchi,
        ]);
    }


    public function teachers()
    {
        $oqituvchilars = Oqituvchilar::all();

        return view('teachers')->with('oqituvchilars', $oqituvchilars);
    }


    public function about()
    {
        $oqituvchilars = Oqituvchilar::all();
        // count
        $oqituvchi = Oqituvchilar::all()->count();
        $oquvchi = Oquvchilar::all()->count();

        return view('about')->with([
            'oqituvchilars' => $oqituvchilars,
            // count
            'oqituvchi' => $oqituvchi,
            'oquvchi' => $oquvchi
        ]);
    }
    public function students_all()
    {
        $posts = Oquvchilar::paginate(6);

        return view('students_all')->with('posts', $posts);
    }

   
}
