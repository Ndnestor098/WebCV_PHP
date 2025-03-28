<?php

namespace Apps\Controllers;

use Apps\Models\Certificate;
use Apps\Models\Language;
use Apps\Models\Project;
use Lib\Auth\Auth;
use Lib\Http\Cookies;

class HomeController 
{
    public function index() 
    {
        if(Cookies::has("certificates") && Cookies::has("projects") && Cookies::has("languages")){
            $certificates = Cookies::get("certificates");
            $projects = Cookies::get("projects");
            $languages = Cookies::get("languages");

        } else {
            $certificates = Certificate::get();

            $projects = Project::get();
    
            $languages = Language::get();

            Cookies::set("certificates", $certificates);
            Cookies::set("projects", $projects);
            Cookies::set("languages", $languages);
        }

        return render("home", [
            "certificates" => $certificates,
            "projects" => $projects,
            "languages" => $languages,
        ]);
    }
}