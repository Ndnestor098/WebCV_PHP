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
        if(Cookies::has("certificates") && Cookies::has("projects") && Cookies::has("lenguages")){
            $certificates = Cookies::get("certificates");
            $projects = Cookies::get("projects");
            $lenguages = Cookies::get("lenguages");

        } else {
            $certificates = Certificate::get();

            $projects = Project::get();
    
            $lenguages = Language::get();

            Cookies::set("certificates", $certificates);
            Cookies::set("projects", $projects);
            Cookies::set("lenguages", $lenguages);
        }

        return render("home", [
            "certificates" => $certificates,
            "projects" => $projects,
            "lenguages" => $lenguages,
        ]);
    }
}