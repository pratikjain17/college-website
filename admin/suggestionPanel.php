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

  img {
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
        <a class="navbar-brand" href="">
            <h2><i class="fas fa-school"></i> DC SOLUTIONS </h2>
        </a>';
    if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
        echo '<form class="form-inline my-2 my-lg-0" method="get">
            <h6 class = "my-2 mx-2" style="color:white;">Welcome Admin <br>' . $_SESSION['adminEmail'] . '</h6>
            <a href = "../partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
          </form>';
    }
    echo '</nav>
    ';
    if (isset($_GET['delete']) && $_GET['delete'] == "success") {
        echo '<div class="alert alert-success" role="alert">
     Suggestion has been successfully deleted !!!
  </div>';
    }

    ?>

  <div class="container py-4 my-2 bodycon animate__animated animate__fadeInUp">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Suggestion Email</th>
          <th scope="col">Suggestion Message</th>
          <th scope="col">Action</th>
      </thead>
      <tbody>
        <?php
                $sql = "SELECT * FROM `suggestion`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['suggestion_id'];
                    $email = $row['suggestion_email'];
                    $message = $row['suggestion_message'];
                    echo '<tr>
                         <th scope="row">' . $id . '</th>
                         <td>' . $email . '</td>
                         <td>' . $message . '</td>
                         <td><a href="deleteSuggestion.php?id=' . $id . '" class="btn btn-danger">Delete</a></td>
                        </tr>';
                }
                ?>

      </tbody>
    </table>
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