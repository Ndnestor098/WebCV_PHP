<?php

namespace Apps\Controllers;

use Lib\Http\Request;
use Lib\Http\Sessions;

class LoginController 
{
    public function index() {
        
        return render("service");
    }

    public function login(Request $request) {
        echo "Login";
    }

    public function logout() {
        
        return render("service");
    }
}