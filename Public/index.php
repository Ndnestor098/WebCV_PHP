<?php

use Apps\Models\User;

require_once "../Lib/autoload.php";
require_once "../Lib/env.php";

echo User::get();
