<?php
     $con = mysqli_connect('localhost','root','','fbclone');
     $id = $_POST['id'];
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $phoneoremail = $_POST['phoneoremail'];
     $password = $_POST['password'];

     $check_data = mysqli_query($con,"SELECT * FROM login WHERE phoneoremail='$phoneoremail'");
     $check = mysqli_num_rows($check_data);

     if ($check > 0) {
        header("Location:http://localhost/facebook-clone-main");
     }else{
        $input = mysqli_query($con,"INSERT INTO login (id,firstname,lastname,phoneoremail,password)VALUES('$id','$firstname','$lastname','$phoneoremail','$password')");
        if ($input) {
            header("Location:http://localhost/facebook-clone-main/mainpage.html");
        }
     }
?>