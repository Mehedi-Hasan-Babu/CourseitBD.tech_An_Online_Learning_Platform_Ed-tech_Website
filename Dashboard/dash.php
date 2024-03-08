<!DOCTYPE html>
<?php
    include "../Login/config.php";
    session_start();
    if(!isset($_SESSION['submit'])){
        session_destroy();
        header('location:../Login/LoginPaga.html');
    }

    
    // Fetch enrolled courses from the database
    $userId = $_SESSION['id'];  // Assuming user_id is the user identifier
    $enrolledCoursesQuery = "SELECT * FROM enrollment WHERE id = $userId";
    $enrolledCoursesResult = mysqli_query($conn, $enrolledCoursesQuery);

    // Check if any enrolled courses are found
    if ($enrolledCoursesResult) {
        $enrolledCourses = mysqli_fetch_all($enrolledCoursesResult, MYSQLI_ASSOC);
    } else {
        $enrolledCourses = [];
    }
    
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <div class="container">
        <div class ="sidebar" style="background-image:url(si.jpg);"> 
        <div class="profile"style="background:#ADD8E6;" >
            <img src="https://source.unsplash.com/100x100/?portrait" alt="">
            <div>
                <h2>Mehedi Hasan Babu</h2>
                <span>
                    <a href="../View Profile/profile.php" rel="noopener noreferrer">View profile</a>
                </span>
            </div>
        </div>
        <div class="header" style="background:#2F4F4F">
            <h2>Dashboard</h2>
            
            <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="green">
                            <!-- Circle background -->
                            <circle cx="256" cy="256" r="256" fill="green" />

                            <!-- Your SVG Path or Content -->
                            <!-- Example content: A white "G" for Google -->
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="200" font-family="Arial">G</text>
                        </svg>
            </button>
        </div>
        <div class="search-container">
            <span>
                <button type="submit">
                <!-- <svg (...) xmlns:xlink="http://www.w3.org/1999/xlink" fill="blue">
<a xlink:title="title (tooltip) text" xlink:href="http://google.com/">
whatever drawing markups you want to be linked
</a> </svg> -->
                </button>
            </span>
            <input type="search" name="Search" placeholder="Search...">
        </div>
        <div class="menu">
            <ul>
                <!-- Menu items -->
                <li><a href = '../Personal info/profile.php'>Personal Information</a></li>
                <li> <a href = "../Free Courses/fc.html">My Courses</a> </li>
                <li> <a href = "../Free Seminar/fsem.html">Seminars</a> </li>
                <li> <a href = "../Free Courses/fc.html">Join Class</a> </li>
                <li> <a href = "../Free Seminar/fsem.html">Tests & Assignments</a> </li>
                <li> <a href = "../Free Seminar/fsem.html">Results</a> </li>
                <span><li> <a href = "../Free Courses/fc.html">My Ranking</a> </li>
                <li> <a href = "../Free Seminar/fsem.html">Visit Our App</a> </li>
                <li> <a href = "../Free Seminar/fsem.html">Visit LinkedIn</a> </li></span>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
        <div class = "box">
           
        <?php
            // Display cards for enrolled courses
            if (isset($enrolledCourses) && !empty($enrolledCourses)) {
                foreach ($enrolledCourses as $course) {
                    $courseId = $course['c_id'];
                    // Fetch course details from the courses table based on the $courseId
                    $courseDetailsQuery = "SELECT * FROM courses WHERE c_id = $courseId";
                    $courseDetailsResult = mysqli_query($conn, $courseDetailsQuery);

                    if ($courseDetailsResult) {
                        $courseDetails = mysqli_fetch_assoc($courseDetailsResult);
                        // Display the card with course details
                        echo '<div class="course-card">';
                        echo '<h3>' . $courseDetails['c_name'] . '</h3>';
                        // Add other course details as needed
                        echo '</div>';
                    }
                }
            } else {
                echo '<p>No enrolled courses found.</p>';
            }
        ?>
        </div>
    </div>
</body>

</html>

