<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Instructor Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Instructor 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['i_id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['i_id']);
                            $query = "SELECT * FROM instructors WHERE i_id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0) {
                                $instructor = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <!-- <input type="hidden" name="instructor_id" <?php echo 'value="'.$instructor['i_name'].'"'; ?>> -->
                            
                                    <div class="mb-3">
                                        <label>Instructor Name</label>
                                        <input type="text" name="i_name" value="<?php echo $instructor['i_name']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Instructor Email</label>
                                        <input type="email" name="i_email" value="<?php echo $instructor['i_email']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Instructor Phone</label>
                                        <input type="text" name="phone" value="<?php echo $instructor['phone']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Instructor Salary</label>
                                        <input type="text" name="salary" value="<?php echo $instructor['salary']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_instructor" class="btn btn-primary">
                                            Update Instructor!
                                        </button>
                                    </div>
                                </form>
                                <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>