<?php

use Apps\Controllers\HomeController;
use Lib\Http\Request;
use Lib\Http\Route;
use Lib\Http\Sessions;

Route::get("/", HomeController::class)->name("home");

Route::post("/login", function(Request $request) {
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'numeric'],
    ]);

    var_dump(Sessions::get("errors"));
    var_dump(Sessions::get("old"));

    redirect("/");
})->name("login");