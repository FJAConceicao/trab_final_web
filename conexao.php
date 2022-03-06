<?php

$hostname = "localhost";
$banco = "web";
$username = "root"; //"cakephp";
$password = "rooT13_mysql"; //"Cake#123";

$mysqli =  new \MySQLi($hostname, $username, $password, $banco);

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
