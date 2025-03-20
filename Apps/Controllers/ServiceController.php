<?php

namespace Apps\Controllers;

class ServiceController 
{
    public function index($slug, $id) {
        

        return render("service", [
            "slug" => $slug,
            "id" => $id,
        ]);
    }
}