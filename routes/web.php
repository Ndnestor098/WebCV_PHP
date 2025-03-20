<?php

use Lib\Http\Route;

Route::get("/", function () {

    return render("home", [
        "test" => [
            "id"=>1,
            "name"=>"nestor",
        ], 
        "test_2" => 1,
    ]);
})->name("home");

Route::get("/contact", function () {

    return render("contact");
})->name("contact");