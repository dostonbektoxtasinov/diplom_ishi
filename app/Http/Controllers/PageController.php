<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function teachers()
    {
        return view('teachers');
    }
   
    public function men()
    {
        return view('men');
    }
    
    public function weman()
    {
        return view('weman');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function student()
    {
        return view('about-student');
    }
   
    
    public function students_all()
    {
        return view('students_all');
    }
   

}
