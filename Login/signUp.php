<?php
 include "config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    // $secure = password_hash($pass, PASSWORD_DEFAULT);

    // $verify = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $query = "INSERT INTO students (name,email,password) VALUES ('$username', '$email', '$pass')";
    $result=mysqli_query($conn, $query);
    if($result) {
        header("location:./loginPaga.html");
                echo "<script>alert('Account Created Successfully.')</script>";}

    // if (mysqli_num_rows($verify) > 0) {
    //     echo "<script>alert('Email already exists.')</script>";
    // } else {
    //     $query = "INSERT INTO users (name,email,password) VALUES ('$username', '$email', '$secure')";
    //     mysqli_query($conn, $query);
    //     echo "<script>alert('Account Created Successfully.')</script>";
    // }

}
?>
