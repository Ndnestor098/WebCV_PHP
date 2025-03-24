<?php

use Apps\Controllers\ServiceController;
use Apps\Models\User;
use Lib\Http\Request;
use Lib\Http\Route;
use Lib\Http\Sessions;

Route::get("/", function (Request $request) {
    $query = User::first();

    return render("home", [
        "test" =>  $query,
    ]);
})->name("home");

Route::get("/contact", function () {

    return render("contact");
})->name("contact");

Route::get("/about", function () {

    return render("about");
})->name("about");

Route::get("/service/:slug/:id", ServiceController::class)->name("service");

Route::post("/login", function(Request $request) {
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'numeric'],
    ]);

    var_dump(Sessions::get("errors"));
    var_dump(Sessions::get("old"));

    redirect("/");
})->name("login");