
<?php 
require '../database/db_connect.php';
$sql="select * from tbl_user";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}
?>

 <?php
 	require '../database/db_connect.php';
	if(isset($_POST['save'])){

		$uid = $_POST['uid'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$pass = $_POST['pass'];
		$confirmpass = $_POST['confirmpass'];
		$usertype = $_POST['usertype'];





// image query

		$user_img ="image/". $_FILES['img']['name'];


         if (!empty($user_img)) {



            $extension = strtolower(substr($user_img,strlen($user_img)-4,strlen($user_img)));
              $allowed_extensions = array(".jpg","jpeg",".png");

              if(in_array($extension,$allowed_extensions)){

              $destination = $user_img;  
              $file = $_FILES['img']['tmp_name'];
              move_uploaded_file($file, $destination); 
               }else{

                 echo "<p style='color:red;text-align:center;'>image type must be (.jpg, jpeg, .png)</p>"; 
            }
          
          }else {
                  $query = "select user_img from tbl_user where user_id = $uid ";
                  $select_image=mysqli_query($connection,$query);
          		
                  if ($select_image) {

                      $row = mysqli_fetch_array($select_image);
                      $user_img = $row['user_img'];
                       
                      
                  }else if($select_image==false){
                       $user_img = "6.jpg";
                  }
              }



			if ($pass==$confirmpass) {

				if (!empty($username) && !empty($email) && !empty($number) && !empty($pass) && !empty($usertype) && !empty($user_img)) {

                $query = "update tbl_user set user_name='$username',user_email='$email',user_no='$number',user_pass='$pass',user_confirm_pass='$confirmpass',user_type='$usertype',user_img='$user_img' where user_id = $uid ";
                $update =mysqli_query($connection,$query);
                if ($update) {
                   echo "<p style='color:green;text-align:center;'>User Updated successfullyView Update History</p>";
                }else{
                    echo "<p style='color:red;text-align:center;'>opps!! profile is not Updated</p>";
                }

            }else{
                echo "<p style='color:red;text-align:center;'>field must not be empty... <a href='index.php'>Click here to edit</a></p>";
            }
				
			}else{

				 echo "<p style='color:red;text-align:center;'>password does not match</p>";


			}

	
	}

  ?>

<div id="admin_content">
	<div class="add_user_header">
		<h4>Update User</h4>
	</div>
	<div id="add_user">
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<table>
					<tr>
						<td>Select User :</td>
						<td>
							<select name="user" id="">
								<option value="select">--Select user id--</option>
								<?php while($row=mysqli_fetch_assoc($resource_id)){ ?>
									<option value="<?php echo $row['user_id']; ?> "><?php echo $row['user_id']; ?></option>
								<?php } ?>
							</select>
							<input type="submit" name="ushow" value="Show">
						</td>
					</tr>
					<?php 
					if(isset($_POST['ushow'])){
							$sql="select * from tbl_user where user_id='$_POST[user]'";
							$query_result=mysqli_query($connection,$sql);

					while($result=mysqli_fetch_assoc($query_result)){ 

						?>
					<tr>
						<td>user image :</td>
						<td><img src="<?php echo $result['user_img']; ?> " alt="" style="height: 50px;width: 50px;"></td>
					</tr>
					<tr>
						<td>Chose image :</td>
						<td><input type="file" name="img"></td>
					</tr>
					<tr>
						<td>User Name :</td>
						<td><input type="text" name="username" value="<?php echo $result['user_name']; ?>"></td>
					</tr>
					<input type="hidden" name="uid" value="<?php echo $result['user_id']; ?>">
					<tr>
						<td>Email :</td>
						<td><input type="email" name="email" value="<?php echo $result['user_email'];?>"></td>
					</tr>
					<tr>
						<td>Phn No :</td>
						<td><input type="text" name="number" value="<?php echo $result['user_no'];?>"></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="pass" value="<?php echo $result['user_pass'];?>"></td>
					</tr>
					<tr>
						<td>Confirm Password :</td>
						<td><input type="password" name="confirmpass" value="<?php echo $result['user_confirm_pass'];?>"></td>
					</tr>
					<?php 
						} 
					}
					?>
					<tr>
						<td>Type Of User :</td>
						<td>
						<select name="usertype" id="">
							<option value="">--select--</option>
							<option value="admin">admin</option>
							<option value="genarel">genarel</option>
						</select>

						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="save" value="UPDATE"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
