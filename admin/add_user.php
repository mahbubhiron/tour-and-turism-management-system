
<?php 

require '../database/db_connect.php';

if(isset($_POST['save'])){
// echo "<pre/>";
// print_r($_POST);
// exit();
	$directory="./image/";
	$target_file=$directory.$_FILES['image']['name'];
	$file_type=pathinfo($target_file,PATHINFO_EXTENSION);
	$file_size=$_FILES['image']['size'];
	//$check=getimagesize($_FILES['image']['tmp_name']);

	if($_POST['pass'] == $_POST['confirmpass']){
			if(getimagesize($_FILES['image']['tmp_name'])){
			if(! file_exists($target_file)){
				if($file_type =='jpg' || $file_type == 'png'){
					if($file_size<=512000){
					move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
					$sql="insert into tbl_user (user_name,user_email,user_no,user_pass,user_confirm_pass,user_type,user_img) values ('$_POST[username]','$_POST[email]','$_POST[number]','$_POST[pass]','$_POST[confirmpass]','$_POST[usertype]','$target_file') ";
						if(mysqli_query($connection,$sql)){
							echo "<script>alert('Informatino save')</script> ";
						}else{
						die('info not save !. error'.mysqli_error($connection));
					}
					}else{
				echo "<script>alert('your file size is to large !. please upload min of 2000')</script>";
				}
				}else{
			echo " <script>alert(your file type is not 'jpg or 'png !. please upload 'jpg' or png)</script> ";
			}
			}else{
		echo "<script> alert('file allready exsist !. plase tray again') </script> ";
		}
		}else{
	echo " <script> alert('your upload file is not image !. please upload image') </script> ";
	}
	}else{
		echo "<script>alert('Password did not match !. please tray again')</script>";
	}
	}


 ?>
<div id="admin_content">
	<div class="add_user_header">
		<h4>Add USer</h4>
	</div>
	<div id="add_user">
		<form action="#" method="post" enctype="multipart/form-data">
			<fieldset>
				<table>
					<tr>
						<td>User Name :</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>Email :</td>
						<td><input type="email" name="email" value=""></td>
					</tr>
					<tr>
						<td>Phone No :</td>
						<td><input type="number" name="number" value=""></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="pass" value=""></td>
					</tr>
					<tr>
						<td>Confirm Password :</td>
						<td><input type="password" name="confirmpass" value=""></td>
					</tr>
					<tr>
						<td>Type Of User :</td>
						<td>
						<select name="usertype" id="">
							<option value="">--Select--</option>
							<option value="admin">Admin</option>
							<option value="genarel">Genarel</option>
						</select>
						</td>
					</tr>
					<tr>
						<td>Chose imgae :</td>
						<td><input type="file" name="image" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="save" value="SAVE"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
