<?php

namespace Apps\Controllers;

class ServiceController 
{
    public function index($slug) {
        

        return render("service", [
            "slug" => $slug
        ]);
    }
}