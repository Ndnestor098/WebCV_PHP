<?php

namespace Apps\Controllers;

use Apps\Models\Project;
use Lib\Http\Cookies;
use Lib\Http\Request;
use Lib\Http\Sessions;
use Lib\Storage\Storage;

class ProjectController
{
    public function create(Request $request) {
        $request->validate([
            "title" => ["required"],
            "url" => ["required"],
        ]);

        $projects = Project::get();
        
        if(count($projects) >= 9){
            Sessions::set("errors", ["count_project" => "You have reached the maximum project value"]);
            return redirect(routes("dashboard"));
        }

        $ImagePaht = Storage::store($_FILES["image"]);

        Project::create(
            ["title", "image", "url", "github_url", "created"], 
            [$request->input("title"), $ImagePaht, $request->input("url"), $request->input("github"), date("Y-m-d H:i:s")]
        );

        Cookies::remove("projects");

        return redirect(routes("dashboard"));
    }   

    public function destroy(Request $request, $id) {
        $project = Project::find($id);

        if(Storage::delete($project->image) && Project::delete($id))
        {
            Cookies::remove("projects");
            
            return redirect(routes("dashboard"));
        }

        Sessions::set("old", ["errors" => "Not found projects"]);

        return redirect(routes("dashboard"));
    }  
}
