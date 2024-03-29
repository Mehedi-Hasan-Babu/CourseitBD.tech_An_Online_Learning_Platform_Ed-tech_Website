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

    <title>Courses Info</title>
</head>

<body style="background-color: aquamarine;height: 100vh; display:flex;">

    <div class="container mt-5">

        <?php include('message.php'); ?>


        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color:bisque ; border-radius:5px">
                    <div class="card-header" style="background-color:aqua;">
                        <h4>Course Details
                        <a href="../access.php" class="btn btn-primary float-end" style="background-color:#637AFA;color:black  ;margin:3px;">Go Back >> </a>
                        <a href="Report.php" class="btn btn-primary float-end" style="background-color:#637AFA;color:black  ;margin:3px;">Print</a>

                            <a href="student-create.php" class="btn btn-primary float-end" style="background-color:#FFCD33;color:black ;  
                                margin:3px;">Add Courses  </a>
                              </h4>
                    </div>     
                 
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Course ID</th>
                                    <th>Course Name</th>
                                    <th>Instructor ID</th>
                                    <th>Description</th>
                                    <!-- <th>Instructor Name</th>  maybe delete later -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM courses";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {
                                ?>
                                        <tr>
                                            <td><?= $student['c_id']; ?></td>
                                            <td><?= $student['c_name']; ?></td>
                                            <td><?= $student['i_id']; ?></td>
                                            <td><?= $student['description']; ?></td>
                                            <!-- <td><= $student['course']; ?></td> -->
                                            <td>
                                                <a href="student-view.php?c_id=<?php echo $student['c_id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="student-edit.php?c_id=<?php echo $student['c_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $student['c_id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>