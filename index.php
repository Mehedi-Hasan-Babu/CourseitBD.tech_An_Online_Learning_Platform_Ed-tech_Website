<?php
include "./Login/config.php";
session_start();
// if (!isset($_SESSION['submit'])) {
//     header('location:./Login/loginPaga.html');
// }
if (isset($_GET['logout'])) {
    unset($_SESSION['name']);
    session_destroy();
    header('location:./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseitBD</title>

    <link rel="icon" href="https://drive.google.com/file/d/1lIhw5iHhur2JoSECWv6CsS-2SDkIssHz/view?usp=drive_link" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <nav class="navbar item">
            <div class=" flexcenter" id="Home"><a class="logo" href="./index.php"></a></div>
            
            <div class="search flexcenter navitem">
                <input type="text" name="searchtxt" placeholder="Search for courses..." class="searchtxt">
                <input type="submit" name="search" class="searchbtn" value=" " title=" ">
            </div>
            <select class="dropdown navitem" name="Our Courses" placeholder="Our Courses" id="" title="Select an option">
                <option value="">Our Courses</option>
                <option value="">Crush Course Competetive Programming</option>
                <option value="">Full Stack Web Development (MERN)</option>
                <option value="">Web Development with PHP and Laravel</option>
                <option value="">Foundation Of Javascript</option>
                <option value="">Mobile Application Development With Flutter</option>
                <option value="">Data Analysis</option>
                <option value="">Product Management and Design</option>
                <option value="">Cyber Security</option>
            </select>
            <a href="./Free Seminar/fsem.html" class="navitem fseminar" id="fsem">Free Seminar</a>
            <?php
            if (isset($_SESSION['name'])) {
                echo '<a style="background-color:blue;color:#fff;" href="./Dashboard/dash.php" class="navitem login" id="login">' . $_SESSION['name'] . '</a>';
                echo '<a style="background-color:red;color:#fff;" href="./index.php?logout" class="navitem login" id="login">Logout</a>';
            } else echo '<a href="./Login/SignUpPage.html" class="navitem login" id="login">Login</a>';

            ?>


        </nav>
        <header class="banner item">
            <div class="content">
                <div class="text">
                    <h2>Learn Skills <span>Live</span></h2>
                    <div class="ring-container">
                        <div class="ringring">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <div class="next">
                    <h1 style="color:blueviolet">Any Where , Any Time ,
                        <span style="color:blueviolet"> Learn Everyday </span>
                    </h1>
                    <p style="color:#404040">
                    <h3>Choose Courses From A Vast </h3>
                    <h3> Selection At The Most Competitive Rate</>
                        </p>
                </div>
                <div class="Hero Button">

                    <button class="btn1" id="btn1">
                        <a href="./Free Courses/fc.html">Learn Free</a>
                    </button>

                </div>

            </div>
            <div class="image">

            </div>
        </header>
        <main class="cards item">
            <div class="Heading" title>Our Courses</div>
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Digital Marketing</h4>
                    <h5>600 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>101+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>306 students</p>
                        </div>
                    </div>
                    <button>
                        <a href="./Course Details/details.php" style="color: rgb(255, 255, 255);"> See details</a></button>
                </div>
            </div>
             card2 -->
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Full Stack Web Development (MERN)</h4>
                    <h5>1200 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>150+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>600 students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div>
            <!- card2 -->
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Full Stack Web Development with PHP and Laravel</h4>
                    <h5>1000 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>101+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>556 students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div>
            <!- card2 -->
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Foundation Of Javascript</h4>
                    <h5>600 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>120+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>445 students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div> -->
            <!-- card2 -->
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Mobile Application Development With Flutter</h4>
                    <h5>3000 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>200+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>1500+ students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div> -->
            <!-- card2 -->
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Data Analytics</h4>
                    <h5>750 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>60+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>90+ students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div> -->
            <!-- card2 -->
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Product Management and Design</h4>
                    <h5>300 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>80+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>200+ students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div> -->
            <!-- card2 -->
            <!-- card1 -->
            <!-- <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Python Player (Advanced)</h4>
                    <h5>600 Taka</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>130+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>1350+ students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div> --> 
            <!-- card2 -->
            <!-- card1 -->
            <?php
// Assuming you have a MySQL connection established already

// Fetching data from the courses table
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">';
        if (!empty($row["image_path"])) {
            echo '<div><img class="cardimg1" src="./image/'.$row['image_path'].'" alt="' . $row["c_name"] . '"></div>';
        } else {

            echo '<div class="cardimg"></div>';
        }
        echo '<div class="cardinfo">';
        echo '<h4>' . $row["c_name"] . '</h4>';
        echo '<h5>' . $row["price"] . ' Taka</h5>';
        echo '<div class="info">';
        echo '<div class="info1">';
        echo '<div class="infoimg1"></div>';
        echo '<p>' . $row["lesson"] . ' lesson</p>';
        echo '</div>';
        echo '<div class="info2">';
        echo '<div class="infoimg2"></div>';
        echo '<p>' . $row["student"] . ' students</p>';
        echo '</div>';
        echo '</div>';
        echo '<button><a href="./Course Details/details.php?c_id=' . $row["c_id"] . '" style="color: rgb(255, 255, 255);"> See details</a></button>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close the MySQL connection
mysqli_close($conn);
?>


            <!-- card2 -->
        </main>
        <div class="infobox item">
            <div class="infoboximg">img</div>
            <div class="infoboxtext">
                <h2>Learn for Free</h2>
 
                     <h3>Skill development is easy now, totally free.
                    Join multiple live webinars, live courses and
                    recorded courses from 8 different categories and 40
                    different skills</h3>
                    <button class="btn1" id="btn1">
                        <a href="./Free Courses/fc.html">Learn Free</a>
                    </button>
                   
                    

            </div>
        </div>



        <!-- </div> -->

        <main class="cards item">
            <!--FREE COURSE card1 -->
            <div class="Heading" title> Free Cousres</div>
            <div class="card">

                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Programming Basic With C</h4>
                    <h5><strike>500 Taka  </strike> <br>Free!</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>60+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>739 students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div>
            <!-- card2 -->
            <!-- card1 -->
            <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Python For Begginers</h4>
                    <h5><strike>600 Taka  </strike> <br>Free!</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>36+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>206 students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div>
            <!-- card2 -->
            <!-- card1 -->
            <div class="card">
                <div class="cardimg"></div>
                <div class="cardinfo">
                    <h4>Art Of Story Telling</h4>
                    <h5><strike>300 Taka  </strike> <br>Free!</h5>
                    <div class="info">
                        <div class="info1">
                            <div class="infoimg1"></div>
                            <p>10+ lesson</p>
                        </div>
                        <div class="info2">
                            <div class="infoimg2"></div>
                            <p>1216+ students</p>
                        </div>
                    </div>
                    <button>See details</button>
                </div>
            </div>
        </main>

        <div class="infobox " style="background-image:url(https://t3.ftcdn.net/jpg/02/68/48/86/240_F_268488616_wcoB2JnGbOD2u3bpn2GPmu0KJQ4Ah66T.jpg) ;">  
    
        <style>
        .bod{
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: url('background-image.jpg') center/cover no-repeat;
        }

        .glass-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            width: 300px;
            text-align: center;
        }

        .review-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
 
<bod>

    <div class="glass-container">
        <h2>Leave a Review</h2>
        <form class="review-form">
            <div class="form-group">
                <label for="name">Course Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" id="rating" name="rating" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
            </div>
            <button type="submit">Submit Review</button>
        </form>
    </div>

</bod>
    
    
    
    
    
    
    </div>

        <!-- <header class="banner item">
            <div class="content">Content</div>
            <div class="image">
            </div>
        </header> -->

    </div>


    <footer class="footer item">
        <div class="footer-col ">
            
            <img src="./image/CourseitBGremoved2.png" style="height:40px; width: 20% inherit;" alt="CourseitBD">
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
     
</body>

</html>