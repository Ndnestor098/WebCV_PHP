<?php

use Apps\Controllers\CertificateController;
use Apps\Controllers\DashboardController;
use Apps\Controllers\HomeController;
use Apps\Controllers\LanguageController;
use Apps\Controllers\LoginController;
use Apps\Controllers\ProjectController;
use Apps\Middleware\Auth;
use Lib\Http\Route;

Route::get("/", HomeController::class)->name("home");

Route::get("/login", [LoginController::class, "index"]);

Route::post("/login", [LoginController::class, "login"])->name("login");
 
Route::get("/dashboard", DashboardController::class)->middleware(Auth::class)->name("dashboard");

// =================================================== Projects ===================================================
Route::post("/project/adding", [ProjectController::class, "create"])->middleware(Auth::class)->name("project.adding");

Route::get("/project/delete/:id", [ProjectController::class, "destroy"])->middleware(Auth::class)->name("project.delete");

// =================================================== Certificates ===================================================
Route::post("/certificate/adding", [CertificateController::class, "create"])->middleware(Auth::class)->name("certificate.adding");

Route::get("/certificate/delete/:id", [CertificateController::class, "destroy"])->middleware(Auth::class)->name("certificate.delete");

// =================================================== Lenguages ===================================================
Route::post("/lenguage/adding", [LanguageController::class, "create"])->middleware(Auth::class)->name("lenguage.adding");

Route::get("/lenguage/delete/:id", [LanguageController::class, "destroy"])->middleware(Auth::class)->name("lenguage.delete");