<?php 
 include '_dbconnect.php';
 $studentId = $_GET['id'];
 if(isset($_GET['answer']) && $_GET['answer'] == "yes"){
     $sql = "UPDATE `students` SET `student_status` = '1' WHERE `students`.`student_id` = $studentId;";
     $result = mysqli_query($conn,$sql);
     header("Location: /college-website/admin/students.php?query=active");
 }
 if(isset($_GET['answer']) && $_GET['answer'] == "no"){
     $sql = "DELETE FROM `students` WHERE `students`.`student_id` = $studentId";
     $result = mysqli_query($conn,$sql);
     header("Location: /college-website/admin/students.php?query=all");
 }
?>