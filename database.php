<?php
    $host="localhost:3307";
    $user="root";
    $pass="";
    $dbname="contact";


    $conn = mysqli_connect($host, $user ,$pass, $dbname) ;

    if(isset($_POST['submit'])){
    
    if(!empty($_POST['firstname'])&& !empty($_POST['lastname'])&& !empty($_POST['email'])&& !empty($_POST['contact'])&& !empty($_POST['subject'])&& !empty($_POST['message'])) {
        
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $query = "insert into contact_info(firstname,lastname,email,contact,subject,message) values('$firstname' , '$lastname', '$email', '$contact', '$subject', '$message')";

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