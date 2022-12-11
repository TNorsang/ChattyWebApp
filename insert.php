<?php

include("dbConnect.php");

$user = $_POST['users'];
$message = $_POST['messages'];
$password = $_POST['passwords'];

$query = "SELECT * FROM `Chat` WHERE Name='$user'";
$re = mysqli_query($conn, $query);
$row1 = $re->fetch_assoc();

if ($row1['Name'] == $user && $row1['Password'] == $password) {
    $insertChat = "UPDATE `Chat` SET `ChatContent`= '$message' WHERE Name = '$user'";
    $result = mysqli_query($conn, $insertChat);
    echo "Welcome $user! Your message has been send!";
    // $row = $result->fetch_assoc();
} else {
    // echo "This is Data'$row1[Name]'";
    // echo "This is Data '$row1[Password]'";
    // echo "User Input $user";
    echo "Your Name or Password is Incorrect!";
}


?>