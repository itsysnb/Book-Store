<?php

require_once "../vendor/autoload.php";

$computer = new \App\CoreI7(new \App\Computer());
echo $computer->price();