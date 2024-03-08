<?php
session_start();

// Check if the user is logged in

    if(!isset($_SESSION['submit'])){
        session_destroy();
        header('location:../Login/LoginPaga.html');
    }
    


// Include the database connection file
include('db_connection.php');

// Fetch student information from the database
$student_id = $_SESSION['id'];
$query = "SELECT * FROM students WHERE id = '$student_id'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $course = $row['course'];
} else {
    echo "Error fetching student information";
}

// Handle profile update
if (isset($_POST['update_profile'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    $update_query = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', course = '$course', password = '$password' WHERE id = '$student_id'";

    if ($conn->query($update_query) === TRUE) {
        echo "Profile updated successfully";
    } else {
        echo "Error updating profile: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
