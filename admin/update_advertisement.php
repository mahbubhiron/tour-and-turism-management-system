

<?php 

require '../database/db_connect.php';

if(isset($_POST["show"]))
{
require '../database/db_connect.php';
$s="select * from tbl_advertiesment where a_id='" .$_POST["a_id"] ."'";
$result=mysqli_query($connection,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$a_id=$data[0];
$title=$data[1];
$c_id=$data[2];
$sc_id=$data[3];
$p_id=$data[4];
$company_name=$data[5];
$a_img_1=$data[6];
$a_img_2=$data[7];
$a_img_3=$data[8];
$offer=$data[9];
$details=$data[10];

}




if(isset($_POST['btn'])){
	$target_file1="image/advertisment/".$_FILES['image-1']['name'];
	$f_t1=pathinfo($target_file1,PATHINFO_EXTENSION);
	$target_file2="image/advertisment/".$_FILES['image-2']['name'];
	$f_t2=pathinfo($target_file2,PATHINFO_EXTENSION);
	$target_file3="image/advertisment/".$_FILES['image-3']['name'];
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
			move_uploaded_file($_FILES['image-1']['tmp_name'], $target_file1); 
			move_uploaded_file($_FILES['image-2']['tmp_name'], $target_file2); 
			move_uploaded_file($_FILES['image-3']['tmp_name'], $target_file3);
			// echo "<script>alert('image uploaded');</script>";
			$sql="update tbl_advertiesment set title='$title',category='$c_id',subcategory='$sc_id',package='$p_id',company_name='$company_name',a_img_1='$target_file1',a_img_2='$target_file2',a_img_3='$target_file3',offer='$offer',a_details='$details' where a_id='$_POST[a_id]' ";

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
						<td>Select Title</td>
						<td>
							<select name="a_id" id="">
								<option value="">--Select Category--</option>
								<?php

								$s="select * from tbl_advertiesment";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);
								//echo $r;

								while($data=mysqli_fetch_array($result))
								{
									if(isset($_POST["show"])&& $data[0]==$_POST["a_id"])
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
						<td>Title :</td>
						<td><input type="text" name="title" value="<?php if(isset($_POST["show"])){ echo $title ;} ?>"></td>
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
						<td><input type="text" name="company_name" value="<?php if(isset($_POST["show"])){ echo $company_name ;} ?>"></td>
					</tr>
					<tr>
						<td>Old image-1 :</td>
						<td><img src="<?php echo $a_img_1; ?>" alt="" style="width: 80px;height: 50px;"></td>
					</tr>
					<tr>
						<td>Upload image-1 :</td>
						<td><input type="file" name="image-1" value="Chose file"></td>
					</tr>
					<tr>
						<td>Old image-2 :</td>
						<td><img src="<?php echo $a_img_2; ?>" alt="" style="width: 80px;height: 50px;"></td>
					</tr>
					<tr>
						<td>Upload image-2 :</td>
						<td><input type="file" name="image-2" value="Chose file"></td>
					</tr>
					<tr>
						<td>Old image-3 :</td>
						<td><img src="<?php echo $a_img_3; ?>" alt="" style="width: 80px;height: 50px;"></td>
					</tr>
					<tr>
						<td>Upload image-3 :</td>
						<td><input type="file" name="image-3" value="Chose file"></td>
					</tr>
					<tr>
						<td>Offer :</td>
						<td><input type="text" name="offer" value="<?php if(isset($_POST["show"])){ echo $offer ;} ?>"></td>
					</tr>
					<tr>
						<td>Details :</td>
						<td><textarea name="details" id="" cols="30" rows="5"><?php if(isset($_POST["show"])){ echo $details ;} ?></textarea></td>
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
