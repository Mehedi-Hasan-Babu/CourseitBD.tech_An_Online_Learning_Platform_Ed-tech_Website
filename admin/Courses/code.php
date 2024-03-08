<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM courses WHERE c_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Course Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Course Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $c_id   = mysqli_real_escape_string($con, $_POST['c_id']);
    $c_name = mysqli_real_escape_string($con, $_POST['c_name']);
    $i_id   = mysqli_real_escape_string($con, $_POST[' i_id']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $query = "UPDATE courses SET c_name='$c_name',  i_id='$i_id',description='$description', WHERE c_id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_student'])) {
    $c_name = mysqli_real_escape_string($con, $_POST['c_name']);
    $i_id = mysqli_real_escape_string($con, $_POST['i_id']);
 // $i_name = mysqli_real_escape_string($con, $_POST['i_name']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $query = "INSERT INTO courses (c_name,i_id,description) VALUES ('$c_name','$i_id','$description')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Course Created Successfully";
        header("Location: student-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>