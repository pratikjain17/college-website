<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        .style {
            font-size: large;
            font-family: sans-serif;
        }

        .display-image img {
            width: 100%;
            height: 300px;
        }
    </style>

    <title>Kushal - About us</title>
</head>

<body>
    <!-- database yaha connect karna -->
    <?php include "partials/_dbconnect.php"; ?>
    <!-- Heade idhar include kiya -->
    <?php include "partials/header.php"; ?>

    <div class="aboutus-section style animate__animated animate__fadeInUp">
        <div class="display-image">
            <img src="https://source.unsplash.com/2400x800/?school" alt="">
        </div>
        <div class="container py-4 my-4">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title" style="font-size: 50px;">About Us</h2>
                        <p class="aboutus-text"> As an institution its purpose is to impart quality education to students of all creeds in general and the Gujarati Linguistic Minority in particular. <br>
                         The college strives to develop the intellectual powers of students and all concerned, continuously and consistently through methods that are participative, interactive and facilitative in a measurable manner. Also to train them to be responsible and worthy citizens by adopting change in its path.
                            The college offers a number of traditional and self financing under graduate and post graduate courses that are affiliated to University Of Mumbai, imparting education to about 7,000 students who reside in and around this fast growing suburb. A perfect blend of dedicated and forward looking Management and committed Teaching and Non Teaching Staff have ensured that the college is on the right trend and have steered it in the right direction.
                            The greatest strength of the college is that it is managed by academicians, who not only understand and respect the value of education and educationists but also believe that knowledge is power and the value of knowledge lies not in its accumulation but in its utilization.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">

                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "partials/footer.php" ?>




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