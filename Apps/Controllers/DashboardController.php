<?php

namespace Apps\Controllers;

use Apps\Models\Certificate;
use Apps\Models\Project;

class DashboardController 
{
    public function index() {
        $projects = Project::get();
        $certificates = Certificate::get();

        return render("dashboard", [
            "projects" => $projects,
            "certificates" => $certificates,
        ]);
    }
}