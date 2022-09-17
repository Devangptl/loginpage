<?php

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','test4');

if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into gmail_login1(email, password) values(?, ?)");

    $stmt->bind_param("ss",$email, $password);
    $execval = $stmt->execute();
    echo $execval;
    echo "registration Successfully....";
    $stmt->close();
    $conn->close();
}
 