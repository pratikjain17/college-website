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
            display: flex;
            flex-direction: column;

        }

        img{
            height: 100px;
            width: 100px;
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
            <h2><i class="fas fa-school"></i> NMS</h2>
        </a>';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '<form class="form-inline my-2 my-lg-0" method="get">
            <h6 class = "my-2 mx-2" style="color:white;">Welcome <br>' . $_SESSION['studentusername'] . '</h6>
            <a href = "../partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
            <a href = "profile.php?id=' . $_SESSION['studentid'] . '" class="btn btn-success ml-2">My Profile</a>
          </form>';
    }
    echo '</nav>';
    ?>


    <div class="container py-4 my-2 bodycon animate__animated animate__fadeInUp">
        <?php 
            if(isset($_GET['query']) && $_GET['query'] == "all"){
                echo '<div aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All students</li>
                        </ol>
                    </div>
                    <table class="table table-dark bg-primary tab">
                        <thead>
                            <tr>
                                <th scope="col">Serial No</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>';
                $sql = "SELECT * FROM `students`";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $studentUsername = $row['student_username'];
                    $studentId = $row['student_id'];
                    $studentEmail = $row['student_email'];
                    $studentPhoto = $row['student_photo'];
                    $studentStatus = $row['student_status'];

                    echo ' <tr>
                    <th scope="row">'.$studentId.'</th>
                    <td>'.$studentUsername.'</td>
                    <td>'.$studentEmail.'</td>
                    <td><img src="../img/'.$studentPhoto.'" alt=""></td>
                    <td>';
                    if($studentStatus == 0){
                        echo 'Pending';
                    }
                    else{
                        echo 'Active';
                    }
                    echo '</td>
                  </tr>';
                }

                echo '</tbody>
                        </table>';
            }
            if(isset($_GET['query']) && $_GET['query'] == "pending"){
                echo '<div aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pending students</li>
                        </ol>
                    </div>
                    <table class="table table-dark bg-primary">
                        <thead>
                            <tr>
                                <th scope="col">Serial No</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Accept/Reject</th>
                            </tr>
                        </thead>
                        <tbody>';
                $sql = "SELECT * FROM `students` WHERE `student_status` = 0";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $studentUsername = $row['student_username'];
                    $studentId = $row['student_id'];
                    $studentEmail = $row['student_email'];
                    $studentPhoto = $row['student_photo'];

                    echo ' <tr>
                    <th scope="row">'.$studentId.'</th>
                    <td>'.$studentUsername.'</td>
                    <td>'.$studentEmail.'</td>
                    <td><img src="../img/'.$studentPhoto.'" alt=""></td>
                    <td>
                    <a href="../partials/_handleStudentRequest.php?answer=yes&id='.$studentId.'" class="btn btn-success"><i class="fa fa-check"></i></a>
                    <a href="../partials/_handleStudentRequest.php?answer=no&id='.$studentId.'" class="btn btn-warning"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>';
                }

                echo '</tbody>
                        </table>';
            }
            if(isset($_GET['query']) && $_GET['query'] == "active"){
                echo '<div aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Active students</li>
                        </ol>
                    </div>
                    <table class="table table-dark bg-primary">
                        <thead>
                            <tr>
                                <th scope="col">Serial No</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>';
                $sql = "SELECT * FROM `students` WHERE `student_status` = 1";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $studentUsername = $row['student_username'];
                    $studentId = $row['student_id'];
                    $studentEmail = $row['student_email'];
                    $studentPhoto = $row['student_photo'];

                    echo ' <tr>
                    <th scope="row">'.$studentId.'</th>
                    <td>'.$studentUsername.'</td>
                    <td>'.$studentEmail.'</td>
                    <td><img src="../img/'.$studentPhoto.'" alt=""></td>
                    <td><a href="deleteStudent.php?id='.$studentId.'" class="btn btn-danger">Delete</a></td>
                  </tr>';
                }

                echo '</tbody>
                        </table>';
            }
        ?>
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
    <script>
        $('#myList a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        });
    </script>
</body>


</html>