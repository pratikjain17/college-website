<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Kushal school</title>
    <style>
        .bodycon {
            min-height: 80vh;
        }

        .fonts {
            font-size: large;
        }

        #imguser {
            height: 200px;
            width: 200px;
            border: 5px solid gold;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- database yaha connect karna -->
    <?php include "../partials/_dbconnect.php"; ?>




    <?php
    session_start();
    echo '  <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="/college-website/index.php">
            <h2> <i class="fas fa-school"></i> NMS</h2>
        </a>';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '<form class="form-inline my-2 my-lg-0" method="get">
            <h6 class = "my-2 mx-2" style="color:white;">Welcome <br>' . $_SESSION['studentusername'] . '</h6>
            <a href = "../partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
            <a href = "dashboard.php" class="btn btn-success ml-2">Dashboard</a>
          </form>';
    }
    echo '</nav>';
    ?>


    <?php
    $studentId = $_GET['id'];
    $method = $_SERVER['REQUEST_METHOD'];
    $showAlert = false;
    if ($method == 'POST') {
        //Update the user profile
        $studentUsername = $_POST['student_username'];
        $studentEmail = $_POST['student_email'];
        $studentAddress = $_POST['student_address'];
        $studentPhoto = $_FILES['student_photo']['name'];
        $destination = "D:/xampp/htdocs/college-website/img/".basename($_FILES['student_photo']['name']);
        move_uploaded_file($_FILES['student_photo']['tmp_name'],$destination);
        $sql_query = "UPDATE `students` SET `student_username` = '$studentUsername',`student_email` = '$studentEmail',`student_photo` = '$studentPhoto',`student_address` = '$studentAddress' WHERE `students`.`student_id` = $studentId";
        $_SESSION['studentusername'] = $studentUsername;
        $result = mysqli_query($conn, $sql_query);
        $showAlert = true;
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully done </strong> Your Profile has been updated.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
              </div>';
        }
    }
    ?>


    <?php
    $studentId = $_GET['id'];
    $sql = "SELECT * FROM `students` WHERE `student_id` = '$studentId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $studentUsername = $row['student_username'];
    $studentEmail = $row['student_email'];
    $studentPhoto = $row['student_photo'];
    $studentAddress = $row['student_address'];
    ?>
    <div class="container bodycon my-2 animate__animated animate__fadeInUp">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="profile.php">Your Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Your Profile</li>
            </ol>
        </div>
        <h2><i class="fa fa-user"></i>Edit Your Profile</h2>

        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Change Username</label>
                <input type="text" class="form-control" id="signupUsername" name="student_username" value="<?php echo $studentUsername; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Change Email address</label>
                <input type="email" class="form-control" id="signupEmail" name="student_email" aria-describedby="emailHelp" value="<?php echo $studentEmail; ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Change Address</label>
                <textarea class="form-control" id="address" name="student_address" rows="3" value=""><?php echo $studentAddress; ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"> Change Photo</label> <br>
                <input class="input" type="file" name="student_photo" value="<?php echo $studentUsername; ?>">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="signupCheck">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
    </div>
    <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </form>

    </div>
    </div>


    <?php include "../partials/footer.php" ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>