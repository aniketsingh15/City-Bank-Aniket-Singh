<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "city_bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}