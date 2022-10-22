<?php
include 'database.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$message=$_POST['message'];

$sql="INSERT INTO users(Username, Email, Contact, Address, Message) VALUES ('$firstname', '$lastname', '$email','$contact','$address','$message')";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ./index.php');
}

?>