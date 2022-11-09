<?php

require_once "../vendor/autoload.php";

/*$computerCoreI7 = new \App\CoreI7(new \App\Computer());
echo $computerCoreI7->price();\*/

$computerCoreI5 = new \App\CoreI5(new \App\Computer());
echo $computerCoreI5->price();