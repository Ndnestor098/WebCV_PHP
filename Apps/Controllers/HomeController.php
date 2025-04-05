<?php

namespace Apps\Controllers;

use Apps\Models\Certificate;
use Apps\Models\Language;
use Apps\Models\Project;
use Lib\Http\Sessions;

class HomeController 
{
    public function index() 
    {
        if(Sessions::has("certificates") && Sessions::has("projects") && Sessions::has("languages")){
            $certificates = Sessions::get("certificates");
            $projects = Sessions::get("projects");
            $languages = Sessions::get("languages");

        } else {
            $certificates = Certificate::get();

            $projects = Project::get();
    
            $languages = Language::get();

            Sessions::set("certificates", $certificates);
            Sessions::set("projects", $projects);
            Sessions::set("languages", $languages);
        }

        return render("home", [
            "certificates" => $certificates,
            "projects" => $projects,
            "languages" => $languages,
        ]);
    }
}