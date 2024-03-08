<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM instructors WHERE i_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Instructor Deleted Successfully!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Instructor Not Deleted!";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']); //problem

    $i_name = mysqli_real_escape_string($con, $_POST['i_name']);
    $i_email = mysqli_real_escape_string($con, $_POST['i_email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);

    $query = "UPDATE instructors SET i_name='$i_name', i_email='$i_email', phone='$phone', salary='$salary' WHERE i_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Instructor Updated Successfully!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Instructoe Not Updated!";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['i_name']);
    $email = mysqli_real_escape_string($con, $_POST['i_email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['salary']);

    $query = "INSERT INTO instructors (i_name,i_email,phone,salary) VALUES ('$name','$email','$phone','$salary')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Instructor Created Successfully!";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Instructor Not Created!";
        header("Location: student-create.php");
        exit(0);
    }
}

?>