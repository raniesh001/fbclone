<?php
    $con = mysqli_connect('localhost','root','','fbclone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM login WHERE phoneoremail='$phoneoremail'AND password='$password'");
    $check = mysqli_num_rows($check_data);

    if ($check > 0) {
        header("Location:http://localhost/facebook-clone-main/mainpage.html");
    }else{
        header("Location:http://localhost/facebook-clone-main");
    }
?>