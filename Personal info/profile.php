<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Student Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class=" flexcenter" id="Home" style="align-items: center; justify-content: center;"><a class="logo" href="../index.php"><img src="../image/CourseitBGremoved2.png" alt=""></a></div>
    <div class="container">
        <h2>Student Profile</h2>
        <?php
            // Include the PHP code to handle profile view and update
            include('profile_process.php');
        ?>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>

            <label for="phone">Phone:</label>
            <input type="tel" name="phone" value="<?php echo $phone; ?>" required>

            <label for="course">Education:</label>
            <input type="text" name="course" value="<?php echo $course; ?>" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <input type="submit" name="update_profile" value="Update Profile">
        </form>
    </div>
</body>
</html>
