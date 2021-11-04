<?php
	include ('session.php');
	include ('includes/database.php');
	
	var_dump($_POST);
	if (isset($_POST['post_comment']))
	{
		$user= $_SESSION['id'];
		$content_comment =$_POST['content_comment'];
		$post_id= $_POST['post_id'];
		$user_id= $_POST['user_id'];
		$time= time();
		

			mySQLi_query($con,"INSERT INTO comments (post_id,user_id,name,content_comment,image,created)
			VALUES ('$post_id','$id','$user_id','$content_comment','$profile_picture',$time)");
			echo "<script>window.location='Rocket_League.php'</script>";
			
	}

	header('location:Rocket_League.php');

	
?>