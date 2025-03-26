<?php

namespace Apps\Models;

class Project extends Models {
    

    public static function Seeder() 
    {
        $projects = [
            [
                "image" => "/assets/images/aciz.webp",
                "title" => "ACIZ: Management System",
                "url" => "https://github.com/Ndnestor098/Software_ACIZ"
                ],
            [
                "image" => "/assets/images/cv.webp",
                "title" => "CV: My Resume",
                "url" => "https://github.com/Ndnestor098/CV"
                ],
            [
                "image" => "/assets/images/scarpetoss.webp",
                "title" => "Scarpetoss Improved with Laravel",
                "url" => "https://github.com/Ndnestor098/ScarpetossLaravel"
                ],
            [
                "image" => "/assets/images/eduplus.webp",
                "title" => "EduPlus with Laravel",
                "url" => "https://github.com/Ndnestor098/EduPlus"
                ],
            [
                "image" => "/assets/images/Villa.png",
                "title" => "Real State Villa with Laravel and React",
                "url" => "https://github.com/Ndnestor098/RealState"
            ]
        ];

        foreach ($projects as $key => $value) {
            self::create(["title", "image", "url", "created"], [$value["title"], $value["image"], $value["url"], date("Y-m-d H:i:s")]);
        }
    }
}
