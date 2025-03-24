<?php

namespace Apps\Controllers;

use Lib\Http\Request;

class ServiceController 
{
    public function index() {
        
        return render("service");
    }

    public function login(Request $request) {
        return $request->all();

        return render("service");
    }

    public function logout() {
        
        return render("service");
    }
}