<?php
     $email = $_POST['email'];
     $password = $_POST['password'];
     

     $con= new mysqli("sql6.freesqldatabase.com","sql6501249","","users");
     if($con->connect_error) {
         die("Failed to connect :".$con->connect_error);
     } else{
            echo "Connection sucessful";
     }
?>