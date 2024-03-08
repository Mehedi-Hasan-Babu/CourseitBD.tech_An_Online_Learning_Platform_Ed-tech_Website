<?php
session_start();
if(isset($_SESSION['submit'])){
    header('location:../index.php');
} 
$login=false;
$showError=false;

// Move session_start to the top
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "config.php";
    $email=$_POST["email"];
    $pass=$_POST["password"]; 

$sql = "SELECT * FROM students WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $fetch=mysqli_fetch_assoc($result);
    if($num==1){
        $login=true;
        $_SESSION['submit']=true;
        $_SESSION['id']=$fetch['id'];
        $_SESSION['email']=$email;
        $_SESSION['password']=$pass;
        $_SESSION['name']=$fetch['name'];
         header('location:../index.php');
        // echo "<script>location='Dashboard/dash.php'</script>";
    }
    else{
        $showError="Invalid Credentials";
        //echo "<script>alert('Invalid email or password!')</script>";
        header('location:./LoginPaga.html?error');
    }

    // if (mysqli_num_rows($result) > 0) {
    //     $row = mysqli_fetch_assoc($result);

    //     if (password_verify($pass, $row['password'])) {
    //         // Password is correct, set session and redirect
    //         $_SESSION['submit'] = true;
    //         $_SESSION['email'] = $email;
    //         $_SESSION['password'] = $pass;
    //         $_SESSION['name'] = $row['name'];
    //         $_SESSION['id'] = $row['id'];
    //         header("Location: index.html");
    //         exit(); // Add exit to stop script execution after redirection
    //     } else {
    //         echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    //     }
    // } else {
    //     echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    // }
}
    ?>