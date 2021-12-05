<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "parcial";

define('DB_NAME', 'parcial');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$con = mysqli_connect($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Erro na conexão: ".$con->connect_error);
    }