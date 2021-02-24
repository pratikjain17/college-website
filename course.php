

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Kushal school</title>
    <style>
	.course-name{
		background-color:white;
		font-weight:bold;
	}
	.course-desc{
		background-color:yellow;
		font-weight:bold;
	}
    img{
        max-height: 300px;
    }
    </style>
</head>

<body>
    <!-- database yaha connect karna -->
    <?php   include "partials/_dbconnect.php"; ?>
    <!-- Heade idhar include kiya -->
    <?php   include "partials/header.php"; ?>


    <div class="container animate__animated animate__fadeInUp">
        <br>
        <h1 class="text-center py-2 my-2"><u>Our Courses and Syllabus</u></h1> <br>
        <div class="container category row">
        <!-- Fetching courses from database -->
            <?php
                $sql = "SELECT * FROM `courses`";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $courseid = $row['course_id'];
                    $coursename = $row['course_name'];
                    $coursedesc = $row['course_description'];
                    $coursephoto = $row['course_photo'];
                    echo '  <div class="accordion-item course-top">
                    <h2 class="accordion-header" id="headingOne">
                    <img src="img/'.$coursephoto.'" class="card-img-top" alt="...">
                      <button class="accordion-button course-name" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        '.$coursename.'
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show course-desc" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p> '.$coursedesc.'</p>
                        <p>  1.&nbsp First Year  </p>
                        <p>  2.&nbsp Second Year  </p>
                        <p>  3.&nbsp Third Year  </p>
                      </div>
                    </div>
                  </div>
                  <hr>';
                }
            ?>
          
        </div>
    </div>

    <?php   include "partials/footer.php"; ?>
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
</body>

</html>