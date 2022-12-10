<?php

include("dbConnect.php");

$user = $_POST['users'];
$message = $_POST['messages'];

// echo $user;
// echo $message;

$insertChat = "UPDATE `Chat` SET `ChatContent`= '$message' WHERE Name = '$user'";
$result = mysqli_query($conn, $insertChat);


// echo "<script>alert('$user');</script>";

// $name=$_POST["names"];

// echo $_POST["messages"];

?>