<?php

namespace Apps\Controllers;

use Apps\Models\Certificate;
use Apps\Models\Language;
use Apps\Models\Project;

class DashboardController 
{
    public function index() {
        $projects = Project::get();
        $certificates = Certificate::get();
        $languages = Language::get();
        
        return render("dashboard", [
            "projects" => $projects,
            "certificates" => $certificates,
            "languages" => $languages
        ]);
    }

    public function logs() {
        $data = []; // Reemplaza esto con la lógica real para obtener los datos de los logs

        return render("logs", [
            "data" => $data
        ]);
    }
}