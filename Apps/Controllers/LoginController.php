<?php

namespace Apps\Controllers;

use Lib\Http\Request;

class ServiceController 
{
    public function index() {
        
        return render("service");
    }

    public function login(Request $request) {
        $request->validate([
            "email" => ["required", "email"],
            "password" => ["required", "string"],
        ]);

        return render("service");
    }

    public function logout() {
        
        return render("service");
    }
}