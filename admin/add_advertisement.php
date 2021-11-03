

<?php 

require '../database/db_connect.php';

if(isset($_POST['btn'])){
	$target_file1="image/advertisment/".$_FILES['image_1']['name'];
	$f_t1=pathinfo($target_file1,PATHINFO_EXTENSION);
	$target_file2="image/advertisment/".$_FILES['image_2']['name'];
	$f_t2=pathinfo($target_file2,PATHINFO_EXTENSION);
	$target_file3="image/advertisment/".$_FILES['image_3']['name'];
	$f_t3=pathinfo($target_file3,PATHINFO_EXTENSION);

	$title=$_POST['title'];
	$c_id=$_POST['c_id'];
	$sc_id=$_POST['sc_id'];
	$p_id=$_POST['p_id'];
	$company_name=$_POST['company_name'];
	$offer=$_POST['offer'];
	$details=$_POST['details'];

	if(!file_exists($target_file1) || !file_exists($target_file2) || !file_exists($target_file3)){

		if(($f_t1 !="jpg" && $f_t1 != "png" && $f_t1 != "jpeg" && $f_t1 != "gif") && ($f_t2 !="jpg" && $f_t2 != "png" && $f_t2 != "jpeg" && $f_t2 != "gif") && ($f_t3 !="jpg" && $f_t3 != "png" && $f_t3 != "jpeg" && $f_t3 != "gif")){

			echo "image is not jpg,png,jpeg or gif please upload type of image";

		}else{
			move_uploaded_file($_FILES['image_1']['tmp_name'], $target_file1); 
			move_uploaded_file($_FILES['image-2']['tmp_name'], $target_file2); 
			move_uploaded_file($_FILES['image-3']['tmp_name'], $target_file3);
			// echo "<script>alert('image uploaded');</script>";
			$sql="insert into tbl_advertiesment (title,category,subcategory,package,company_name,a_img_1,a_img_2,a_img_3,offer,a_details) values ('$title','$c_id','$sc_id','$p_id','$company_name','$target_file1','$target_file2','$target_file3','$offer','$details')";
			if(mysqli_query($connection,$sql)){
				echo "<script>alert('Data insert succefully');</script>";
			}else{
				die('query error '.mysqli_error($connection));
			}
			}

	}else{
		echo "<script>alert('File allready exist');</script>";
	}
}

 ?>

<div id="admin_content">
	<div class="add_user_header">
		<h4>Add Advertisement</h4>
	</div>
	<div id="add_user">
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				
				<table>
					<tr>
						<td>Title :</td>
						<td><input type="text" name="title" value=""></td>
					</tr>
					<tr>
						<td>Select Category</td>
						<td>
							<select name="c_id" id="">
								<option value="">--Select Category--</option>
								<?php

								$s="select * from tbl_category";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);
								//echo $r;

								while($data=mysqli_fetch_array($result))
								{
									if(isset($_POST["show"])&& $data[0]==$_POST["c_id"])
									{
										echo"<option value=$data[0] selected>$data[1]</option>";
									}
									else
									{
										echo "<option value=$data[0]>$data[1]</option>";
									}
								}

								?>
							</select>
							<input type="submit" name="show" value="Show">
						</td>
					</tr>
					<tr>
						<td>Select SubCategory</td>
						<td>
							<select name="sc_id" id="">
								<option value="">--Select SubCategory--</option>
								<?php

								$s="select * from tbl_subcategory";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);
								//echo $r;

								while($data=mysqli_fetch_array($result))
								{
									if(isset($_POST["show"])&& $data[0]==$_POST["sc_id"])
									{
										echo"<option value=$data[0] selected>$data[1]</option>";
									}
									else
									{
										echo "<option value=$data[0]>$data[1]</option>";
									}
								}

								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Select Package</td>
						<td>
							<select name="p_id" id="">
								<option value="">--Select Package--</option>
								<?php

								$s="select * from tbl_package";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);
								//echo $r;

								while($data=mysqli_fetch_array($result))
								{
									if(isset($_POST["show"])&& $data[0]==$_POST["p_id"])
									{
										echo"<option value=$data[0] selected>$data[1]</option>";
									}
									else
									{
										echo "<option value=$data[0]>$data[1]</option>";
									}
								}

								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Company Name :</td>
						<td><input type="text" name="company_name" value=""></td>
					</tr>
					<tr>
						<td>Upload Pic-1 :</td>
						<td><input type="file" name="image_1" value="Chose file"></td>
					</tr>
					<tr>
						<td>Upload Pic-2 :</td>
						<td><input type="file" name="image_2" value="Chose file"></td>
					</tr>
					<tr>
						<td>Upload Pic-3 :</td>
						<td><input type="file" name="image_3" value="Chose file"></td>
					</tr>
					<tr>
						<td>Offer :</td>
						<td><input type="text" name="offer"></td>
					</tr>
					<tr>
						<td>Details :</td>
						<td><textarea name="details" id="" cols="30" rows="5"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="btn" value="SAVE"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
