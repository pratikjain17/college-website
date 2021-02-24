<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
        $email = $_POST['loginEmail'];
        $password = $_POST['loginPassword'];

        $sql = "SELECT * FROM `students` WHERE `student_email` LIKE '$email'";
        $result = mysqli_query($conn,$sql);
        // $numRows = mysqli_num_rows($result);
        // echo $numRows;
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
                if(password_verify($password,$row['student_password'])){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['studentid'] = $row['student_id'];
                    $_SESSION['studentemail'] = $email;
                    $_SESSION['studentusername'] = $row['student_username'];
                    echo "logged in". $email;
                    header("Location: /college-website/student/dashboard.php");
                }
                else{
                    $error = "Password incorrect";
                    header("Location: /college-website/index.php?error=$error");
                }
        }
        else{
            $error = "Unable to login";
            header("Location: /college-website/index.php?error=$error");   
        }
    }
?>