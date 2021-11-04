<?php
	include('includes/database.php');
	include('session.php');
							

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $status = $_POST['status'];
        if (empty($status)) {
            echo '<script>alert("Your Post Is Empty")</script>';
        } else {
            echo $status;
        }
    }
							
	$user=$_SESSION['id'];
	$content=$_POST['content'];
	$time=time();
    $category_id = $_POST['category_id'];
	$update=mysqli_query($con," INSERT INTO post (user_id, content, created, category_id)
	VALUES ('$id','$content','$time', '$category_id') ");

    if ($_POST['category_id'] == 0)
	    header('location:valorant.php');
    else
        header('location:Rocket_League.php');

?>