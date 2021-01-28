<?php
require('vendor/autoload.php');
// $_SERVER['REQUEST_URI]
// Si mon url != "plop-slack.herokuapp.com"

if($_SERVER['HTTPS_HOST'] != "plop-slack.herokuapp.com"){
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

// Sinon je ne le fais
$ary = array("token" => $_ENV['TOKEN']);
$data = json_encode($ary);
//[{data: "Hello World}]

echo($data);
