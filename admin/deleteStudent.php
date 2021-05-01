<?php
   include "../partials/_dbconnect.php"; 
    $studentId = $_GET['id'];
    $sql = "DELETE FROM `students` WHERE `students`.`student_id` = $studentId";
    $result = mysqli_query($conn,$sql);
    header("Location: /college-website/admin/students.php?query=active")


?>