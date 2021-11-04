<?php include ('session.php');?>
<?php
	include ('includes/database.php');
	
	if (isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$age=$_POST['age'];
		$discord=$_POST['discord'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		
			$sql=mySQLi_query($con,"select * from user WHERE email='$email'");
			$row=mySQLi_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='login.php'</script>";
			}
			elseif($password != $password2)
			{
			echo "<script>alert('Password do not match!'); window.location='login.php'</script>";
			}else
		{
			mySQLi_query($con,"INSERT INTO user (username,email,age,discord,password,password2)
			VALUES ('$username','$email','$age','$discord','$password','$password2')");
			echo "<script>alert('Account successfully created!'); window.location='login.php'</script>";
		}
			
	}
	
?>