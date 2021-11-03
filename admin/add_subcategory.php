
<?php 
require '../database/db_connect.php';
$sql="select * from tbl_category";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}


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
					$sql="insert into tbl_subcategory (subcategory_name,category_name,subcategory_image,subcategory_details) values ('$_POST[subcategory_name]','$_POST[category_name]','$target_file','$_POST[details]') ";
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
		<h4>Add Subcategory</h4>
	</div>
	<div id="add_user">
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<table>
					<tr>
						<td>Subcategory Name :</td>
						<td><input type="text" name="subcategory_name" value=""></td>
					</tr>				
					<tr>
						<td>Select Category :</td>
						<td>
						<select name="category_name" id="">
							<option value="select">--Select--</option>
						<?php while($result=mysqli_fetch_assoc($resource_id)) {?>
							<option value="<?php echo $result['category_id']; ?>"><?php echo $result['category_name']; ?></option>
						<?php } ?>
						</select>
						</td>
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
				</table>
			</fieldset>
		</form>
	</div>
</div>
