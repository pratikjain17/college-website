<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
        $student_username = $_POST['signupUsername'];
        $student_email = $_POST['signupEmail'];
        $student_password = $_POST['signupPassword'];
        $student_cpassword = $_POST['signupCpassword'];
        $student_gender = $_POST['gender'];
        $student_course = $_POST['courses'];
        $student_address = $_POST['address'];
        $student_photo = $_FILES['image']['name'];
        $destination = "C:/xampp/htdocs/college-website/img/".basename($_FILES['image']['name']);
        


        // $p = array($student_username,$student_email,$student_password,$student_gender,$student_address,$student_photo);
        // print_r($p);
        // check if user already exists or not
        $existsSQL = "select * from `students` where student_email=`$student_email`";
        $result = mysqli_query($conn,$existsSQL);
        // $numRows = mysqli_num_rows($result);
        if($result->num_rows >0){
            $showError = "Email already in use";
        }
        else
            if($student_password == $student_cpassword){
                move_uploaded_file($_FILES['image']['tmp_name'],$destination);
                $hash_password = password_hash($student_password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `students` (`student_id`, `student_username`, `student_email`, `student_password`, `student_gender`,`student_course_id`, `student_photo`, `student_address`, `student_status`, `timestamp`) 
                VALUES (NULL, '$student_username', '$student_email', '$hash_password', '$student_gender','$student_course', '$student_photo', '$student_address', '0', current_timestamp());";
                $result = mysqli_query($conn,$sql);

                if($result){
                    $showAlert = true;
                    header("Location:/college-website/index.php?signupSuccess=true");
                    exit();
                }
            }
            else{
                $showError = "Passwords do not match";
                header("Location:/college-website/index.php?signupSuccess=false&error=$showError");
            }
        
        header("Location:/college-website/index.php?signupSuccess=false&error=$showError");
    }
?>