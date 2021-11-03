
<?php 

require '../database/db_connect.php';
$sql="select * from tbl_subcategory";
if(mysqli_query($connection,$sql)){
	$subc_resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}


// $sql="select * from tbl_category";
// if(mysqli_query($connection,$sql)){
// 	$c_resource_id=mysqli_query($connection,$sql);
// }else{
// 	die('not view'.mysqli_error($connection));
// }


if(isset($_POST['btn'])){

	$directory="./image/subcategory_image/";
	$target_file=$directory.$_FILES['image']['name'];
	$file_type=pathinfo($target_file,PATHINFO_EXTENSION);
	$file_size=$_FILES['image']['size'];
	//$check=getimagesize($_FILES['image']['tmp_name']);

		if(getimagesize($_FILES['image']['tmp_name'])){
			if(! file_exists($target_file)){
				if($file_type =='jpg' || $file_type == 'png'){
					if($file_size<=512000){
					move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
					$sql = "update tbl_subcategory set subcategory_name='$_POST[subcategory_name]',category_name='$_POST[category_name]',subcategory_image='$target_file',subcategory_details='$_POST[details]' where subcategory_id ='$_POST[sub_c_id]' ";
					if(mysqli_query($connection,$sql)){
							echo "<script>alert('subcategory Informatino save..!')</script> ";
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
	}



 ?>
<div id="admin_content">
	<div class="add_user_header">
		<h4>Update Subcategory</h4>
	</div>
	<div id="add_user">
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<table>
					<tr>
						<td>Select Subcategory :</td>
						<td>
							<select name="sub_c_id" id="">
								<option value="select_subcategory">--Select--</option>
							<?php while($result=mysqli_fetch_assoc($subc_resource_id)) {?>
								<option value="<?php echo $result['subcategory_id']; ?>"><?php echo $result['subcategory_name']; ?></option>
							<?php } ?>
							</select>
							<input type="submit" name="show_category" value="Show">
						</td>
					</tr>
					<?php 
					if(isset($_POST['show_category'])){
							$sql="select * from tbl_category";
							$query_result=mysqli_query($connection,$sql);

					 // $result_sub=mysqli_fetch_array($query_result);

					?>
					<tr>
						<td>Subcategory Name :</td>
						<td><input type="text" name="subcategory_name" value=""></td>
					</tr>
					<tr>
						<td>Select Category :</td>
						<td>
						<select name="category_name" id="">
							<option value="select">--Select--</option>
						<?php while($result=mysqli_fetch_assoc($query_result)) {?>
 						<option value="<?php echo $result['category_id']; ?>"><?php echo $result['category_name']; ?></option>
						 <?php } ?>
						</select>
						</td>
					</tr>
				<?php } ?>
				<?php 
					if(isset($_POST['show_category'])){
							$sql="select * from tbl_subcategory where subcategory_id='$_POST[sub_c_id]'";
							$query_result=mysqli_query($connection,$sql);

					  $result_sub=mysqli_fetch_array($query_result);

					?>
					<tr>
						<td>Old Pic :</td>
						<td><img src="<?php echo $result_sub['subcategory_image']; ?>" alt="" style="height: 80px;width: 110px;"></td>
					</tr>
					<tr>
						<td>Upload Pic :</td>
						<td><input type="file" name="image" value="Chose image"></td>
					</tr>
					<tr>
						<td>Details :</td>
						<td><textarea name="details" id="" cols="20" rows="3"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="btn" value="SAVE"></td>
					</tr>
				<?php } ?>
				</table>
			</fieldset>
		</form>
	</div>
</div>
