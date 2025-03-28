<?php

namespace Apps\Controllers;

use Apps\Models\Language;
use Lib\Http\Cookies;
use Lib\Http\Request;
use Lib\Http\Sessions;
use Lib\Storage\Storage;

class LanguageController
{
    public function create(Request $request) {
        $request->validate([
            "name" => ["required"],
            "level" => ["required"],
            "architecture" => ["required"],
        ]);

        $language = Language::get();
        
        $count_backend = 0;
        $count_frontend = 0;

        foreach ($language as $key => $value) {
            if($value->architecture == "frontend" && $request->input("architecture") == "frontend"){ 
                $count_frontend++;
            }
            if($value->architecture == "backend" && $request->input("architecture") == "backend"){
                $count_backend++;
            }
        }

        if($count_backend >= 6){
            Sessions::set("errors", ["count_language" => "You have reached the maximum language back value"]);
            return redirect(routes("dashboard"));
        }

        if($count_frontend >= 6){
            Sessions::set("errors", ["count_language" => "You have reached the maximum language front value"]);
            return redirect(routes("dashboard"));
        }

        $ImagePaht = Storage::store($_FILES["image"]);

        Language::create(
            ["name", "image", "level", "architecture", "created"], 
            [$request->input("title"), $ImagePaht, $request->input("level"), $request->input("architecture"), date("Y-m-d H:i:s")]
        );

        Cookies::remove("languages");

        return redirect(routes("dashboard"));
    }   

    public function destroy(Request $request, $id) {
        $language = Language::find($id);

        if(Storage::delete($language->image) && Language::delete($id))
        {
            Cookies::remove("languages");
            
            return redirect(routes("dashboard"));
        }

        Sessions::set("old", ["errors" => "Not found languages"]);


        return redirect(routes("dashboard"));
    }   
}
