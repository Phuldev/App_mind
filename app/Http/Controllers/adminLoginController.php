<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    public function index()
    {
        return view('adminLogin');
    }

    public function adminLogin(Request $request)
    {
        $validationDate = $request->validate([
            'adminEmail' => 'required|adminEmail',
            'password'   =>  'required|min:6|max:12'
        ]);
        $adminEmail = $request->input('adminEmail');
        $adminPassword = $request->input('adminPassword');
        return 'e-mail: '.$adminEmail .'Password: '.$adminPassword;
    }
}

