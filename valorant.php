<?php
   require('includes/database.php');
   $id = $_REQUEST['user_id'] ?? "";
   
   $result = mysqli_query($con,"SELECT * FROM user WHERE user_id  = '$id'");
   $test = mysqli_fetch_array($result);
   
   if (!$result) 
   		{
   		die("Error: Data not found..");
   		}
         $username=$test['username'] ?? "";
         $age=$test['age'] ?? "";
         $email=$test['email'] ?? "";
         $discord=$test['discord']?? "";
         //$password=$test['password']?? "";
         //$password2=$test['password2']?? "";
         include ('session.php');
         
         if(isset($_POST['save']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['discord']))
         {	
         $username_save= $_POST['username'];
         $age=$test['age'] ?? "";
         $email_save= $_POST['email'];
         $discord_save= $_POST['discord'];
         // $password_save=$_POST['password'] ?? "";
         // $password_save=$_POST['password2'] ?? "";
         //echo '<script type="text/javascript">','display();','</script>';
         $query = "UPDATE `user` SET `username` = '$username_save', `email` = '$email_save', `discord` = '$discord_save' WHERE `user_id` = $id;";
         if (mysqli_query($con, $query)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
   	      header("Location: valorant.php");
         }
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>VALORANT</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/valorant.css">
      <script src="https://kit.fontawesome.com/96c0e606a7.js"></script>
   </head>
   <body>
      <?php include ('session.php');?>
      <?php include ('timming_function.php');?>
      <div class="navigation">
         <ul>
            <li>
               <a href="home.php">
               <span class="icon"><i class="fas fa-home"></i></span>
               <span class="title">Home</span>
               </a>
            </li>
            <li>
               <a href="help">
               <span class="icon"><i class="fas fa-question-circle"></i></span>
               <span a class="title">Help</span>
               </a>
            </li>
            <li>
               <a href="logout.php">
               <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
               <span class="title">Sign Out</span>
               </a>
            </li>
         </ul>
      </div>
      <div id="container">
      <div id="right-nav">
         <h1 style="padding-bottom: 20px;">Update Status</h1>
         <div>
            <form method="post" action="post.php">
               <input type="hidden" name="category_id" value="0" />
               <textarea value="Looking for Team ?" name="content" class="post-text" required></textarea>
               <div class="button-share">
                  <button class="btn-hover share" name="Submit">
                     <p>Share</p>
                  </button>
               </div>
            </form>
         </div>
         <?php
            include("includes/database.php");
            $query = mySQLi_query($con, "SELECT * from user where user_id='$id' order by user_id DESC");
            while ($row = mySQLi_fetch_array($query)) {
                $id = $row['user_id'];
            ?>
      </div>
      <div id="left-nav2">
         <div class="card-container">
            <span class="pro">New</span>
            <div class="clip1">
               <center>
                  <a href="updatephoto.php" title="Change Profile Picture">
                  <img src="<?php echo $row['profile_picture'] ?>">
                  </a>
               </center>
            </div>
            <section>
               <details>
                  <summary>
                     <div class="edit_info">
                        <div class="btn-comment">
                           <h5 class="button"> Edit Profile</h5>
                        </div>
                     </div>
                     <div class="details-modal-overlay"></div>
                  </summary>
                  <div class="details-modal_profile">
                     <div class="details-modal-close_profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
                        </svg>
                     </div>
                     <div class="details-modal-title_profile">
                        <form method="post">
                           <div class="profile_info">
                              <div class="username">
                                 <h3>Username</h3>
                                 <input type="text" name="username" value="<?php echo $username; ?>" class="form-1" required />
                              </div>
                              <div class="email">
                                 <h3>Email</h3>
                                 <input type="text" name="email" value="<?php echo $email; ?>" class="form-1" required />
                              </div>
                              <div class="discord">
                                 <h3>Discord</h3>
                                 <input type="text" name="discord" value="<?php echo $discord; ?>" class="form-1" required />
                                 <br>
                              </div>
                              <div class="age">
                                 <h3>Age</h3>
                                 <input type="text" name="age" value="<?php echo $age; ?>" class="form-1" required />
                              </div>
                              <div><button type="submit" name="save" class="btn-comment">Save</button></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </details>
            </section>
            <div class="account_info">
               <h2>Acccount info</h2>
               <table>
                  <tr>
                     <td><label>Username</label></td>
                     <td width="20"></td>
                     <td><b><?php echo $row['username']; ?></b></td>
                  </tr>
                  <tr>
                     <td><label>Discord</label></td>
                     <td width="20"></td>
                     <td><b><?php echo $row['discord']; ?></b></td>
                  </tr>
                  <tr>
                     <td><label>Age</label></td>
                     <td width="20"></td>
                     <td><b><?php echo $row['age']; ?></b></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      <?php
         }
                 		$query= mySQLi_query($con,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id WHERE category_id = 0 order by post_id DESC");
                 		while($row = mySQLi_fetch_array($query)){
                 			$posted_by = $row['username'];
                          $discord = $row['discord'];
                 			$profile_picture = $row['profile_picture'];
                 			$content=$row['content']; 
                 			$post_id = $row['post_id'];
                 			$time= $row['created'];
                 ?>
      <div class="right-nav1">
         <div class="tools">
            <div class="profile_picture">
               <img src="<?php echo $profile_picture; ?>">
            </div>
            <div class="poster">
               <h3><?php echo $posted_by; ?></h3>
            </div>
            <br>
            <div class="trash2">
               <a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post">
               <img  src="css/trash.png"></a>
            </div>
         </div>
         <div class="post_time">
            <strong><?php echo $time = time_stamp($time); ?></strong>
         </div>
         <div class="post-content">
            <p>
               <?php echo $row['content']; ?>
            </p>
         </div>
         <?php
            $comment=mySQLi_query($con,"SELECT * from `comments` WHERE `post_id`='$post_id' order by `post_id` DESC");
            while($row=mySQLi_fetch_array($comment)){
                      $comment_id = $row['comment_id'];
                      $content_comment = $row['content_comment'];
                      $time = $row['created'];	
                      $post_id = $row['post_id'];
                      $user = $_SESSION['id'];
            
            ?>
         <div class="comment-display" <?php echo $comment_id ?>>
            <div class="comment_avatar">
               <img src="<?php echo $row['image']; ?>">
            </div>
            <div class="comment_name">
               <h3><?php echo $row['name']; ?></h3>
            </div>
            <div class="time-comment">
               <?php echo $time = time_stamp($time); ?>
            </div>
            <div class="comment_post">
               <?php echo $row['content_comment']; ?>
            </div>
         </div>
         <br />
         <?php
            }
            ?>
         <div class="commentor">
            <form method="POST" action="comment.php">
               <div class="comment-area">
                  <div class="comment_box">
                     <details>
                        <summary>
                           <div class="button">
                              <p class="btn-comment"> Write a Comment</p>
                           </div>
                           <div class="details-modal-overlay"></div>
                        </summary>
                        <div class="details-modal">
                           <div class="details-modal-close">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
                              </svg>
                           </div>
                           <div class="avatar_profile">
                           </div>
                           <div class="details-modal-title">
                              <textarea name="content_comment" placeholder="Write a comment..." class="comment-text"></textarea>
                              <input type="submit" name="post_comment" value="Comment" class="btn-comment2">
                           </div>
                     </details>
                     </div>
                     <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
                     <input type="hidden" name="user_id" value="<?php echo $username . ' ' . $username  ?>">
                     <input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
                  </div>
            </form>
            </div>
         </div>
         <?php
            }
            ?>
      </div>
      <div class="omen">
         <img src="css/omen.png">
      </div>
   </body>
   <script type="text/javascript">
      function  display(){
         console.log('done');
      }
   </script>
</html>