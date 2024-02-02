<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index(){

        return view('admin.auth.login');
    }

    public function login (Request $request){
        $email = $request->email;
        $password = $request->password;

    }
}
