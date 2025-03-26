<?php

namespace Apps\Models;

class Language extends Models {
    

    public static function Seeder() 
    {
        $projects = [
            [
                "name" => "React",
                "level" => "Starting",
                "architecture" => "frontend",
            ],
            [
                "name" => "CSS",
                "level" => "Intermediate",
                "architecture" => "frontend",
            ],
            [
                "name" => "JavaScript",
                "level" => "Intermediate",
                "architecture" => "frontend",
            ],
            [
                "name" => "Web Design",
                "level" => "Intermediate",
                "architecture" => "frontend",
            ],
            [
                "name" => "Tailwind",
                "level" => "Intermediate",
                "architecture" => "frontend",
            ],
            [
                "name" => "PHP",
                "level" => "Intermediate",
                "architecture" => "backend",
            ],
            [
                "name" => "SQL",
                "level" => "Intermediate",
                "architecture" => "backend",
            ],
            [
                "name" => "GIT",
                "level" => "Intermediate",
                "architecture" => "backend",
            ],
            [
                "name" => "Laravel",
                "level" => "Intermediate",
                "architecture" => "backend",
            ],
            [
                "name" => "Python",
                "level" => "Intermediate",
                "architecture" => "backend",
            ],
            [
                "name" => "Docker",
                "level" => "Intermediate",
                "architecture" => "backend",
            ],
        ];

        foreach ($projects as $key => $value) {
            self::create(["name", "level", "architecture", "created"], [$value["name"], $value["level"], $value["architecture"], date("Y-m-d H:i:s")]);
        }
    }
}
