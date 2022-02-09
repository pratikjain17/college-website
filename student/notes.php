<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <title>Kushal school</title>
  <style>
  .bodycon {
    min-height: 80vh;
    display: flex;
    flex-direction: column;

  }

  .listy {
    max-height: 50vh;
    overflow-y: auto;
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
            <h2><i class="fas fa-school"></i> DC SOLUTIONS</h2>
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
    <div aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Notes</li>
      </ol>
    </div>
    <h1><i class="fas fa-book-open"></i> Notes</h1>
    <div class="container row">
      <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $email = $_SESSION['studentemail'];
                $query = "SELECT * FROM `students` WHERE `student_email` LIKE '$email'";
                $q_res = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($q_res);
                $status = $row['student_status'];
                if ($status == 0) {
                    echo '<h2 class="text-center" style="color:red;">You are not active student to view the notes,Please wait for the admin to accept</h2';
                } else {
                    $course = $_SESSION['studentCourse'];
                    $sql1 = "SELECT * FROM `assignments` WHERE `assignment_course_id` = $course";
                    $result = mysqli_query($conn, $sql1);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $assignmentTitle = $row['assignment_title'];
                        $assignmentDesc = $row['assignment_description'];
                        $assignmentFile = $row['assignment_file'];
                        echo '<div class="list-group my-2">
                    <a href="../assignments/' . $assignmentFile . '" class="list-group-item list-group-item-action flex-column align-items-start active bg-primary">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><strong>' . $assignmentTitle . '</strong></h5>
                    <small>by DC SOLUTIONS</small>
                  </div>
                  <p class="mb-1">' . $assignmentDesc . '</p>
                  <small></small>
                </a>
              </div>';
                    }
                }
            } else {
                echo '<h2 class="text-center" style="color:red;">You are not logged in to view the dashboard</h2>
            <h3 class="text-center" style="color:blue;">Please Login...</h3>';
            }
            ?>
    </div>
  </div>

  <?php include "../partials/footer.php" ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
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