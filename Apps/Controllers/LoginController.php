<?php

namespace Apps\Controllers;

use Lib\Http\Request;
use Lib\Http\Sessions;

class LoginController 
{
    public function index() {
        
        return render("login");
    }

    public function login(Request $request) {
        $request->validate([
            "email" => ["required","email"],
            "name" => ["required","string"],
            "password" => ["required","string"],
        ]);

        var_dump($request->all());
    }

    public function logout() {
        
        return render("service");
    }
}