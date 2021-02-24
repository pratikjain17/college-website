<?php 
    $showError = "false";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        include '_dbconnect.php';
        $adminEmail = $_POST['adminEmail'];
        $adminPassword = $_POST['adminPassword'];

        $sql = "SELECT * FROM `admin` WHERE `admin_email` LIKE '$adminEmail'";
        $result = mysqli_query($conn,$sql);

        if($result->num_rows >0){
            $row = mysqli_fetch_assoc($result);
                if($row['admin_password'] == $adminPassword){
                    session_start();
                    $_SESSION['adminloggedin'] = true;
                   
                    $_SESSION['adminEmail'] = $adminEmail;
                    echo "logged in". $adminEmail;
                    header("Location: /college-website/admin/dashboard.php");
                }
                else{
                    $showError = "true";
                    $error = "Unable to login";
                    header("Location: /college-website/admin/dashboard.php?error=$adminPassword");
                }
            }
            else{
            $showError = "true";
            $error = "Unable to login";
            header("Location: /college-website/admin/dashboard.php?error=$error");   
        }
    }
    
?>