<?php

require_once __DIR__ . "../Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$club = input("Club");
echo $club . PHP_EOL;
