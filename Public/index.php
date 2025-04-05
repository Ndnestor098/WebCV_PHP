<?php
echo "";
require_once (__DIR__ . "/../Lib/constants.php");
require_once (__DIR__ . "/../Lib/env.php");
require_once (__DIR__ . "/../Lib/autoload.php");
require_once (__DIR__ . "/../Routes/web.php");
use Lib\Http\Route;

Route::run();