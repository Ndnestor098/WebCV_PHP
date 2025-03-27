<?php

namespace Apps\Controllers;

use Lib\Auth\Auth;
use Lib\Http\Request;

class LoginController 
{
    public function index() {
        
        return render("login");
    }

    public function login(Request $request) {
        $request->validate([
            "email" => ["required","email"],
            "name" => ["required","string"],
            "password" => ["required"],
        ]);

        if(Auth::attempt($request->input('email'), $request->input("password"))){
            return redirect(routes("dashboard"));
        }

        return redirect(routes("login"));
    }

    public function logout() {
        Auth::logout();

        return redirect(routes("home"));
    }
}