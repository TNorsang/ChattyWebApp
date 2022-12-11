<?php

include("dbConnect.php");

$user = $_POST['users'];
$message = $_POST['messages'];

// echo $user;
// echo $message;

$selectChat = "SELECT * FROM `Chat` WHERE 1";
$result = mysqli_query($conn, $selectChat);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        echo '<h4>' . $row["Name"] . '</h1>' . '<p>' . $row["ChatContent"] . '</p>';
    }
}

?>