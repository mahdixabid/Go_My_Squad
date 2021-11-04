<?php
include("includes/database.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$id = $_SESSION['id'];

$query=mysqli_query ($con,"SELECT * FROM user WHERE user_id ='$id'");
$row=mysqli_fetch_array($query);
$profile_picture=$row['profile_picture'];
$username=$row['username'];
$discord=$row['discord'];
$username=$row['username'];
?>