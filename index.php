<?php

use CoffeeCode\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$Routes = new CoffeeCode\Router\Router("localhost");

$Routes->group(null);

$Routes->get("/", function ($data) {
    include 'View/Home.php';
});
$Routes->get("/Home", function ($data) {
    echo "Você está na página Home!";
});
$Routes->get("/Login", function ($data) {
    include 'View/Login.php';
});

$Routes->dispatch();
