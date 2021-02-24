<?php
    session_start();
    echo ' <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <h4><i class="fas fa-school"></i> NMS</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fas fa-info"></i> About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-book-open"></i> Student Corner
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="partials/loginModal.php" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                        <li><a class="dropdown-item" href="course.php">Courses and Syllabus</a></li>
                        <li><a class="dropdown-item" href="student/dashboard.php">Dashboard</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactform" tabindex="-1" aria-disabled="false"><i class="fas fa-phone"></i> Contact us</a>
                </li>
            </ul>';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                echo '<form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="query" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <p class = "my-2 mx-2" style="color:white;">Welcome <br>' .$_SESSION['studentusername']. '</p>
                <a href = "partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
              </form>';
            }
            elseif(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){
                echo '<form class="form-inline my-2 my-lg-0">
                <a class="btn btn-outline-success my-2 my-sm-0" href="admin/dashboard.php">Admin Panel</a>
                <p class = "my-2 mx-2" style="color:white;">Welcome <br>' .$_SESSION['adminEmail']. '</p>
                <a href = "partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
              </form>';
            }
            else{
                echo'
                <a class="nav-link" href="partials/adminLoginModal.php"  data-bs-toggle="modal" data-bs-target="#adminModal"><button type="button" class="btn btn-danger">Admin Login</button></a>
            ';
            }
            
        echo'</div>
    </div>
</nav>';
include 'partials/loginModal.php';
include 'partials/signupModal.php';
include 'partials/adminLoginModal.php';

if(isset($_GET['signupSuccess']) && $_GET['signupSuccess'] == "true"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Successfully done: </strong> You can now login.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}
if(isset($_GET['error']) && $_GET['error'] == "Unable to login"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Email or password is not correct || Unable to login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }   
?>