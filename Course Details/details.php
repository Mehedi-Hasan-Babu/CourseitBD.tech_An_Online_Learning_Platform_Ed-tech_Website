<?php
include "../Login/config.php";
session_start();
if (!isset($_SESSION['submit'])) {
    echo "<script>
    alert('You need to login first');
    setTimeout(function() {
        window.location.href = '../Login/LoginPaga.html';
    }, 1000); // 2000 milliseconds (2 seconds)
  </script>";
   
    exit();
}

if (isset($_GET['logout'])) {
    unset($_SESSION['name']);
    session_destroy();
    header('location:./index.php');
}


// if(isset($_POST['enrollment'])){
//     $c_id=$_GET['c_id'];
//     $s_id=$_SESSION['id'];
//     $sql="insert into enrollment(id,c_id) values('$s_id','$c_id')";
//     if(mysqli_query($conn,$sql))
//     {
//         header('Location: ../index.php');
//         exit();
//     }
//     mysqli_close($conn);
// }
$student_id = $_SESSION['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enroll_button'])) {
    // Get the course_id from the form
    $course_id = $_POST['course_id'];

    // Insert enrollment information into the database
    $sql = "INSERT INTO enrollment (id, c_id) VALUES ($student_id, $course_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Enrollment successful!";
        header('Location: ../Dashboard/dash.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <link rel="stylesheet" href="../Free Seminar/fsem.css">
</head>
<body>
    <div class="container">

        <nav class="navbar item">
            <div class="logo flexcenter " id="Home"><a href="../index.php" class="btnlogo"> <img src="../image/CourseitBGremoved2.png" alt=""> </a></div>
            <div class="search flexcenter navitem">
                <input type="text" name="searchtxt" placeholder="Search for courses..." class="searchtxt">
                <input type="submit" name="search" class="searchbtn" value="Search" title="Search">
            </div>
            <select class="dropdown navitem" name="" id="" title="Select a course">
                <option value="">Our Courses</option>
                <option value="">Opt2</option>
            </select>
            <a href="/Free Seminar/fsem.html" class="navitem fseminar">Free Seminar</a>
            <a href="../Login/LoginPaga.html" class="navitem login" id="login">Log in</a>
            


        </nav>

        <header class="banner item">
            <div class="content"> 
               
                <p>Course Title</p>
                <h1>Course Name</h1>
                <p>Course Description</p>
            
                Course Details Here............</div>
            <div class="image">
                
             </div>



        </header>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="course_id" value="<?php echo htmlspecialchars($_GET['c_id']); ?>">
    <button type="submit" name="enroll_button">Enroll</button>
</form>


        <main class="cards item">
         <!-- card1 -->
         <div class="card">
            <div class="cardimg"></div>
            <div class="cardinfo">
                <h4>Module 1</h4>
                <h5>Introduction</h5>
                <div class="info">
                    <div class="info1">
                        <div class="infoimg1"></div>
                        <p>101 lesson</p>
                    </div>
                    <div class="info2">
                        <div class="infoimg2"></div>
                        <p>306 students</p>
                    </div>
                </div>
                <button>See details</button>
            </div>
        </div>
        <!-- card2 -->
        <!-- card1 -->
        <div class="card">
            <div class="cardimg"><img src="favicon.ico.png" alt=""></div>
            <div class="cardinfo">
                <h4>Module 2</h4>
                <h5>Test</h5>
                <div class="info">
                    <div class="info1">
                        <div class="infoimg1"></div>
                        <p>101 lesson</p>
                    </div>
                    <div class="info2">
                        <div class="infoimg2"></div>
                        <p>306 students</p>
                    </div>
                </div>
                <button>See details</button>
            </div>
        </div>
        <!-- card2 -->
        <!-- card1 -->
        <div class="card">
            <div class="cardimg"><img src="favicon.ico.png" alt=""></div>
            <div class="cardinfo">
                <h4>Module 3</h4>
                <h5>Test</h5>
                <div class="info">
                    <div class="info1">
                        <div class="infoimg1"></div>
                        <p>101 lesson</p>
                    </div>
                    <div class="info2">
                        <div class="infoimg2"></div>
                        <p>306 students</p>
                    </div>
                </div>
                <button>See details</button>
            </div>
        </div>
        <!-- card2 -->
        <!-- card1 -->
        <div class="card">
            <div class="cardimg"><img src="favicon.ico.png" alt=""></div>
            <div class="cardinfo">
                <h4>Module 4</h4>
                <h5>Conclusion</h5>
                <div class="info">
                    <div class="info1">
                        <div class="infoimg1"></div>
                        <p>101 lesson</p>
                    </div>
                    <div class="info2">
                        <div class="infoimg2"></div>
                        <p>306 students</p>
                    </div>
                </div>
                <button>See details</button>
            </div>
        </div>
     </main>

        <div class="infobox item">Infobox</div>
        <footer class="footer item">Footer</footer>
        <script src="script.js"></script>
    </div>
</body>
</html>