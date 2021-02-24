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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <title>Kushal school</title>
  <style>
    .bodycon {
      min-height: 80vh;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>
  <!-- database yaha connect karna -->
  <?php include "../partials/_dbconnect.php"; ?>




  <?php
  session_start();
  echo '  <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="">
            <h2><i class="fas fa-school"></i> NMS</h2>
        </a>';
  if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    echo '<form class="form-inline my-2 my-lg-0" method="get">
            <h6 class = "my-2 mx-2" style="color:white;">Welcome Admin <br>' . $_SESSION['adminEmail'] . '</h6>
            <a href = "../partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
          </form>';
  }
  echo '</nav>';
  ?>


  <div class="container py-4 my-2 bodycon animate__animated animate__fadeInUp">
    <h1 class="py-3"><i class="fas fa-tachometer-alt"></i>Dashboard</h1>
    <div class="container row">
      <?php
      $sql = "SELECT * FROM students;";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_num_rows($result);
      $sql1 = "SELECT * FROM students where `student_status` = 0;";
      $result1 = mysqli_query($conn,$sql1);
      $row1 = mysqli_num_rows($result1);
      $row2 = $row - $row1;

      if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
        echo '<div class="col-md-4 my-2" style="display:inline-block;">
        <div class="card gal--animation gal--part bg-dark text-white" style="width: 18rem;">
            <div class="card-body text-white">
                <h5 class="card-title"><i class="fa fa-users fa-3x"></i> All Students :  '.$row.'</h5>
                <p class="card-text">All the list of students</p>
            </div>
            <div class="card-footer">
                <a href="students.php?query=all" class="btn btn-success" style="width:5rem;"> <i class="fa fa-arrow-right"></i></a>
            </div>    
        </div>
    </div>
    <div class="col-md-4 my-2" style="display:inline-block;">
        <div class="card gal--animation gal--part bg-dark text-white" style="width: 18rem;">
            <div class="card-body text-white">
                <h5 class="card-title"> <i class="fa fa-users fa-3x"></i> Pending request : '.$row1.'</h5>
                <p class="card-text">All the list of students</p>
            </div>
            <div class="card-footer">
                <a href="students.php?query=pending" class="btn btn-success" style="width:5rem;"> <i class="fa fa-arrow-right"></i></a>
            </div>    
        </div>
    </div>
    <div class="col-md-4 my-2" style="display:inline-block;">
        <div class="card gal--animation gal--part bg-dark text-white" style="width: 18rem;">
            <div class="card-body text-white">
                <h5 class="card-title"> <i class="fa fa-users fa-3x"></i> Active Students : '.$row2.'</h5>
                <p class="card-text">All the list of Active students</p>
            </div>
            <div class="card-footer">
                <a href="students.php?query=active" class="btn btn-success" style="width:5rem;"> <i class="fa fa-arrow-right"></i></a>
            </div>    
        </div>
    </div>';
      }
      ?>
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