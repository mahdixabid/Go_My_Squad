<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="css/home.css">
   </head>
   <body>
      <?php include ('session.php');?>
      <form method="post" enctype="multipart/form-data">
         <input type="file" name="image">
         <input type="submit" value="save" name="image" />
         <?php
            include ('includes/database.php');
            
            if (!isset($_FILES['image']['tmp_name'])) {
            echo "";
            }else{
            $file=$_FILES['image']['tmp_name'];
            $image = $_FILES["image"] ["name"];
            $image_name= addslashes($_FILES['image']['name']);
            $size = $_FILES["image"] ["size"];
            $error = $_FILES["image"] ["error"];
            
            if ($error > 0){
            			die("Error uploading file! Code $error.");
            		}else{
            			if($size > 10000000) //conditions for the file
            			{
            			die("Format is not allowed or file size is too big!");
            			}
            			
            		else
            			{
            
            		move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
            		$location="upload/" . $_FILES["image"]["name"];
            		$user=$_SESSION['id'];
            		$update=mysqli_query($con,"UPDATE user SET profile_picture = '$location' WHERE user_id='$user'");
            		
            		$update1=mysqli_query($con,"UPDATE comments SET image = '$location' WHERE user_id='$user'");
            
            		}
            			header('location:valorant.php');
            		
            		
            		}
            }
            ?>
      </form>
   </body>
</html>