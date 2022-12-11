<?php

$servername = "sql1.njit.edu";
$username = "tn25";
$password = "Freetibet11!";
$dbname = "tn25";
// Four inputs
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}

?>