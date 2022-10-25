<?php
$email = "abc123@example.com"; 
$regex = '/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/'; 
if (preg_match($regex, $email)) {
 echo $email . " is valid.";
} 
?>