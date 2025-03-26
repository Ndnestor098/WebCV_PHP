<?php

namespace Apps\Controllers;

use Apps\Models\Certificate;
use Apps\Models\Language;
use Apps\Models\Project;

class HomeController 
{
    public function index() {

        $certificates = Certificate::get();

        $projects = Project::get();

        $lenguages = Language::get();

        return render("home", [
            "certificates" => $certificates,
            "projects" => $projects,
            "lenguages" => $lenguages,
        ]);
    }
}