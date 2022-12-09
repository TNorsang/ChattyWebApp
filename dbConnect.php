<?php

$servername = "sql1.njit.edu";
$username = "tn25";
$password = "Freetibet11!";
$dbname = "tn25";
// Four inputs
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection Failed:" . $con->connect_error);
} else {
    echo "Successfully Connected!";
}

?>