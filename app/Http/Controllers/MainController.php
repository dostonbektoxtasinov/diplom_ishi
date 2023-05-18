<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function maktab_admin_paneliga_kirdingiz()
    {
        return view('Admin.layouts.main');
    }

    public function admin() 
    {
        return view('auth.auth');
    }


    public function auth(Request $request)
    {
        $auth = auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($auth) {
            return redirect()->route('maktab_admin_paneliga_kirdingiz');
        }
        return redirect()->route('admin');
    }



  
}
