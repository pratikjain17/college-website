
<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '../partials/_dbconnect.php';
        $email = $_POST['email'];
        $suggestion = $_POST['suggestion'];

        $sql = "INSERT INTO `suggestion` (`suggestion_id`, `suggestion_email`, `suggestion_message`, `timestamp`) VALUES (NULL, '$email', '$suggestion', current_timestamp());";
        $result = mysqli_query($conn,$sql);
        // $numRows = mysqli_num_rows($result);
    }


    header("Location: /college-website/index.php?suggestion=success")

    
?>