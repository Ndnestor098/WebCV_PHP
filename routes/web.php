<?php

use Apps\Controllers\ServiceController;
use Apps\Models\User;
use Lib\Http\Request;
use Lib\Http\Route;

Route::get("/", function (Request $request) {
    $request->validate([
        "name" => ["required", "string"],
    ]);
    
    $query = User::first();

    
    
    return render("home", [
        "test" =>  $query,
        "request" => $request->input("name"),
    ]);
})->name("home");

Route::get("/contact", function () {

    return render("contact");
})->name("contact");

Route::get("/about", function () {

    return render("about");
})->name("about");

Route::get("/service/:slug/:id", ServiceController::class)->name("service");