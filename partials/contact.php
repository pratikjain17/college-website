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
</head>
<body>

<?php
  session_start();
  echo '  <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="">
            <h2><i class="fas fa-school"></i> DC SOLUTION</h2>
        </a>';
  if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    echo '<form class="form-inline my-2 my-lg-0" method="get">
            <h6 class = "my-2 mx-2" style="color:white;">Welcome Admin <br>' . $_SESSION['adminEmail'] . '</h6>
            <a href = "../partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
          </form>';
  }
  echo '</nav>';
  ?>


    <?php
    echo '<div class="container py-4 my-2" id="contactform animate__animated animate__fadeInUp animate__delay-2s">
    <h2>Contact us</h2>
    <form action="../admin/suggestion.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1"> Email Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone
                else.</small>
        </div>
        <div class="form-group">
            <label for="exampleSuggestion">Suggestions</label>
            <input type="textarea" class="form-control" id="exampleSuggestion" placeholder="suggestion" name="suggestion">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>';
    ?>
     
    <?php include "footer.php" ?>


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