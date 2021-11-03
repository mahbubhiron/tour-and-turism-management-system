<?php 
require '../database/db_connect.php';
$sql="select * from tbl_category";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}
?>

<?php 

if(isset($_POST['btn'])){

	$sql=" update tbl_category set category_name='$_POST[category_name]' where category_id ='$_POST[c_id]' ";

	if(mysqli_query($connection,$sql)){
		echo "<script>alert('Data update succefully !');</script>";
	}else{
		die('something wron!not update'.mysqli_error($connection));
	}
}

 ?>

<div id="admin_content">
	<div class="add_user_header">
		<h4>Update Category</h4>
	</div>
	<div id="add_user">
		<form action="#" method="post">
			<fieldset>
				<table>
					<tr>
						<td>Select Category Name :</td>
						<td>
							<select name="c_id" id="">
								<option value="select">--Select--</option>
								<?php while($row=mysqli_fetch_assoc($resource_id)){ ?>
									<option value="<?php echo $row['category_id']; ?> "><?php echo $row['category_id']; ?></option>
								<?php } ?>
							</select>
							<input type="submit" name="u_show" value="Show"></
						</td>
					</tr>
					<?php 
					if(isset($_POST['u_show'])){
							$sql="select * from tbl_category where category_id='$_POST[c_id]'";
							$query_result=mysqli_query($connection,$sql);

					while($result=mysqli_fetch_assoc($query_result)){ 

						?>
					<tr>
						<td>Categor Name :</td>
						<td><input type="text" name="category_name" value="<?php echo $result['category_name']; ?>"></td>
					</tr>
					<?php 
						} 
					}
					?>
					<tr>
						<td></td>
						<td><input type="submit" name="btn" value="UPDATE"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
