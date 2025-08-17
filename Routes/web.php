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
Route::get("/logout", [LoginController::class, "logout"])->name("logout");
 
Route::get("/dashboard", [DashboardController::class, "index"])->middleware(Auth::class)->name("dashboard");

Route::get("/dashboard/logs", [DashboardController::class, "logs"])->middleware(Auth::class)->name("logs");


// =================================================== Projects ===================================================
Route::post("/project/adding", [ProjectController::class, "create"])->middleware(Auth::class)->name("project.adding");

Route::get("/project/delete/:id", [ProjectController::class, "destroy"])->middleware(Auth::class)->name("project.delete");

// =================================================== Certificates ===================================================
Route::post("/certificate/adding", [CertificateController::class, "create"])->middleware(Auth::class)->name("certificate.adding");

Route::get("/certificate/delete/:id", [CertificateController::class, "destroy"])->middleware(Auth::class)->name("certificate.delete");

// =================================================== Languages ===================================================
Route::post("/language/adding", [LanguageController::class, "create"])->middleware(Auth::class)->name("language.adding");

Route::get("/language/delete/:id", [LanguageController::class, "destroy"])->middleware(Auth::class)->name("language.delete");

Route::get("download", function() {
    $path = __DIR__ . '/../Public/assets/pdf/cv-en.pdf';
    $fileName = "CV.pdf";
    
    // Verifica si el archivo existe
    if (file_exists($path)) {
        // Establece las cabeceras para la descarga del archivo
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf'); // Tipo de contenido del archivo (en este caso PDF)
        header('Content-Disposition: attachment; filename="' . basename($fileName) . '"'); // Forzar descarga con el nombre indicado
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path)); // Tamaño del archivo

        // Envía el archivo al navegador
        readfile($path);
        exit; // Termina la ejecución del script después de la descarga
    } else {
        // Si el archivo no existe, redirige a la página de inicio
        return redirect(routes("home"));
    }

    // Después de la descarga, redirige al home
    echo "<script type='text/javascript'>
            setTimeout(function() {
                window.location.href = '" . routes('home') . "';
            }, 1000); // Redirige después de 1 segundo
          </script>";
})->name("download");
