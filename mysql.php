<?php

$server = "MySQL-8.0";
$username = "root";
$password = "";
$database = "movies";

$connection = new mysqli($server,$username,$password,$database);

if ($connection ->connect_error) {
    die("Connection Failed: " . $connection ->connect_error);
}


