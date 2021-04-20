<?php
include '../partials/_dbconnect.php';
$id = $_GET['id'];
$sql = "DELETE FROM `suggestion` WHERE `suggestion_id` = $id";
$result = mysqli_query($conn, $sql);
header("Location: /college-website/admin/suggestionPanel.php?delete=success");