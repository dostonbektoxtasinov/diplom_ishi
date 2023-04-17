<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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
            return redirect()->route('/admins');
        }
    }
}
