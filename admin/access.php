<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #007bff;
            color: #fff;
            text-align: right;
            padding: 10px;
        }

        header img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 250px;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .student {
            background-color: #28a745;
            color: #fff;
        }

        .instructor {
            background-color: #ffc107;
            color: #333;
        }

        .courses {
            background-color: #007bff;
            color: #fff;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
        }
        .courses .btn {
            background-color: #ffc107;
            color: #333;
        }
    </style>
</head>
<body>

    <header> 
        <img src="profile-icon.png" alt="Profile Icon">
        Welcome, User!
    </header>
    <a href="../index.php" class="btn btn-primary text-center" style="background-color:#637AFA;color:white ;margin:3px;">Go to Webpage >> </a>

    <div class="container">
        <div class="card student">
            <h3>Student</h3>
            <p>Manage Student Information</p>
            <a href="Students/index.php" class="btn">Go to Student Page</a>
        </div>

        <div class="card instructor">
            <h3>Instructor</h3>
            <p>Manage Instructor Information</p>
            <a href="Instructors/index.php" class="btn">Go to Instructor Page</a>
        </div>

        <div class="card courses">
            <h3>Courses</h3>
            <p>Manage Course Information</p>
            <a href="Courses/index.php" class="btn">Go to Courses Page</a>
        </div>
    </div>

</body>
</html>
