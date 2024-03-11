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
            <a href="../Free Seminar/fsem.html" class="navitem fseminar">Free Seminar</a>
            <a href="../Login/LoginPaga.html" class="navitem login" id="login">Log in</a>
            


        </nav>

        <header class="banner item">
            <div class="content"> 
                <?php
                    $courseId = $_GET['c_id'];
                    $_SESSION['c_id'] = $courseId;
            $courseDetailsQuery = "SELECT * FROM courses WHERE c_id = $courseId";
                    $courseDetailsResult = mysqli_query($conn, $courseDetailsQuery);
                    $courseDetails = mysqli_fetch_assoc($courseDetailsResult);
                    $_SESSION['c_name'] = $courseDetails['c_name'];
                    $_SESSION['description'] = $courseDetails['description'];

                    ?>
                <p>Course Title </p>
                <h1>  
                <?php
                            if (isset($_SESSION['c_id'])) {
                                echo $_SESSION['c_name'];
                            }
                            ?></h1>
                <p>Course Description:</p>
                <?php
              
                            if (isset($_SESSION['c_id'])) {
                                echo $_SESSION['description'];
                            }
                            ?></div>
            <div class="image">
                
             </div>



        </header>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="course_id" value="<?php echo htmlspecialchars($_GET['c_id']); ?>">
    <button type="submit" name="enroll_button" class ="enroll_button">Enroll</button>
</form>


        <main class="cards item">
         <!-- card1 -->
         <div class="card">
            <div class="cardimg1"></div>
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
            <div class="cardimg2 "><img src="" alt=""></div>
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
            <div class="cardimg3"><img src=" " alt=""></div>
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
            <div class="cardimg4"><img src=" " alt=""></div>
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

     <div class="infobox item">
            <div id="sorryMessage" style=" 
                font-family: 'Arial', sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                margin: 0;
                background-color: #e448d275;
            
    
           
                color: #ff0000;
                font-size: 24px;
                font-weight: bold;
            "></div>

            <script>
                // JavaScript to dynamically display the "Sorry" message
                document.getElementById('sorryMessage').innerText = 'Here You will get course details! Upcoming soon! Stay with us! Thank you';
            </script>
            </div>
     
        <script src="script.js"></script>
   

    <footer class="footer item">
        <div class="footer-col ">
            
            <img src="../image/CourseitBGremoved2.png" style="height:40px; width: 20% inherit;" alt="CourseitBD">
            <ul>
                 <li><a href="./admin/adminLogin.php">Admin Login</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
        <div class="footer-col ">
            <h3>Contact Us</h3>
            <ul>
                <li><a href="Our Team/team.html">Our Team</a></li>
                <li><a href="#">Email : info.courseitbd@gmail.com</a></li>
                <li><a href="#">Hotline :16260</a></li>
                <li><a href="#">Dumki-8602,Patuakhali</a></li>
            </ul>

        </div>
        <div class="footer-col">
            <h3>Quick Link</h3>
            <ul>
                <li><a href="#">Upcoming Live Batch</a></li>
                <li><a href="#">Free Courses</a></li>
                <li><a href="#">Live Work Shop</a></li>
                <li><a href="#">Blog</a></li>
            </ul>

        </div>
        <div class="footer-col">
            <h3>Company</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Refund Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
        </div>
        <div class="Fimg">
           
            <div class="credit">Created By <span>Mehedi Hasan Babu</span> ||All Rights Reserved!</div>


        </div>
    </footer>
        <script src="script.js"></script>
    </div>
</body>
</html>