<?php
    $host="127.0.0.1:3307";
    $user="root";
    $pass="root";
    $dbname="contact";


    $conn = mysqli_connect($host, $user ,$pass, $dbname) ;

    if(isset($_POST['submit'])){
    
    if(!empty($_POST['firstname'])&& !empty($_POST['lastname'])&& !empty($_POST['email'])&& !empty($_POST['contact'])&& !empty($_POST['address'])&& !empty($_POST['message'])) {
        
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $message=$_POST['message'];

        $query = "insert into contact_info(firstname,lastname,email,contact,address,message) values('$firstname' , '$lastname', '$email', '$contact', '$address', '$message')";

        $run = mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
        

        if($run) {
            echo "Form submitted";
        }
        else {
            echo "form not submitted";
        }
    }
    else{
        echo "all fields required";
    }
}

?>