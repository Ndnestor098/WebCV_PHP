<?php

namespace Apps\Models;

class Certificate extends Models {
    
    public static function Seeder() {
        $certificates = [
            [
                "title" => "SQL: A Practical Introduction for Querying Databases",
                "image" => "/assets/img/IBM_SQL.webp",
                "url" => "https://coursera.org/share/facecf3d5e07daa479159642a9ca66c6",
            ],
            [
                "title" => "Technical Support Fundamentals",
                "image" => "/assets/img/google_technical_support.webp",
                "url" => "https://coursera.org/share/a118196dbddf9be6b7a086bd55e5e78f",
            ],
            [
                "title" => "Building Web Applications in PHP",
                "image" => "/assets/img/Michigan_PHP.webp",
                "url" => "https://coursera.org/share/bff12bf3e36946f7dfeb85b10c26b088",
            ],
            [
                "title" => "Introduction to Front-End Development",
                "image" => "/assets/img/Meta_Front_End.webp",
                "url" => "https://coursera.org/share/141d7636e8a12eadb35ddd3f9566cd25",
            ],
            [
                "title" => "React Basic",
                "image" => "/assets/img/Meta_React_Basic.webp",
                "url" => "https://coursera.org/share/04c562aa6dbb4e3ee1931188f757a9d8",
            ],
            [
                "title" => "Advanced React",
                "image" => "/assets/img/Meta_React_Advanced.webp",
                "url" => "https://www.coursera.org/account/accomplishments/verify/X9JFT60Z8J4J",
            ],
            [
                "title" => "Version Control with Git",
                "image" => "/assets/img/Atlassian_GIT.webp",
                "url" => "https://coursera.org/share/fe37fcdf76159069fcbb49078e87d1aa",
            ],
            [
                "title" => "APIs",
                "image" => "/assets/img/Meta_API.webp",
                "url" => "https://coursera.org/share/24ab00a618cf6191a569cd41c9e300f2",
            ]
        ];

        foreach ($certificates as $key => $value){
            self::create(["title", "image", "url", "created"], [$value["title"], $value["image"], $value["url"], date("Y-m-d H:i:s")]);
        }
    }
}
