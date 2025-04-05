<?php

namespace Apps\Controllers;

use Apps\Models\Certificate;
use Lib\Http\Request;
use Lib\Http\Sessions;
use Lib\Storage\Storage;

class CertificateController
{
    public function create(Request $request) {
        $request->validate([
            "title" => ["required"],
            "url" => ["required"],
        ]);

        $certificate = Certificate::get();
        
        if(count($certificate) >= 9){
            Sessions::set("errors", ["count_certificate" => "You have reached the maximum certificate value"]);
            return redirect(routes("dashboard"));
        }

        $ImagePaht = Storage::store($_FILES["image"]);

        Certificate::create(
            ["title", "image", "url", "created"], 
            [$request->input("title"), $ImagePaht, $request->input("url"), date("Y-m-d H:i:s")]
        );

        return redirect(routes("dashboard"));
    }   

    public function destroy(Request $request, $id) {
        $certificate = Certificate::find($id);

        if(Storage::delete($certificate->image) && Certificate::delete($id))
        {   
            return redirect(routes("dashboard"));
        }

        Sessions::set("old", ["errors" => "Not found certificate"]);

        return redirect(routes("dashboard"));
    }  
}
