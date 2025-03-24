<?php


require_once "../Lib/constants.php";
require_once "../Lib/env.php";
require_once "../Lib/autoload.php";
require_once "../Routes/web.php";
use Lib\Http\Route;

Route::run();