<?php

namespace Apps\Controllers;

use Apps\Models\Language;
use Lib\Http\Request;
use Lib\Http\Sessions;
use Lib\Storage\Storage;

class LanguageController
{
    public function create(Request $request) {
        $request->validate([
            "title" => ["required"],
            "url" => ["required"],
        ]);

        $ImagePaht = Storage::store($_FILES["image"]);

        Language::create(
            ["title", "image", "url", "created"], 
            [$request->input("title"), $ImagePaht, $request->input("url"), date("Y-m-d H:i:s")]
        );

        return redirect(routes("dashboard"));
    }   

    public function destroy(Request $request, $id) {
        $language = Language::find($id);

        if(Storage::delete($language->image) && Language::delete($id))
        {
            return redirect(routes("dashboard"));
        }

        Sessions::set("old", ["errors" => "Not found language"]);

        return redirect(routes("dashboard"));
    }  
}
