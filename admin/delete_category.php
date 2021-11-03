<?php 
require '../database/db_connect.php';
$sql="select * from tbl_category";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}

if(isset($_POST['btn'])){
	$c_id=$_POST['c_id'];
	$sql="delete from tbl_category where category_id=$c_id ";
	if(mysqli_query($connection,$sql)){
		echo "<script>alert('category info delete');</script>";
	}else{
		die('data not delte! something wrong'.mysql_error($connection));
	}
}


?>


<div id="admin_content">
	<div class="add_user_header">
		<h4>Delete Category</h4>
	</div>
	<div id="add_user">
		<form action="" method="post">
			<fieldset>
				<table>
					<tr>
						<td>Select User :</td>
						<td>
							<select name="c_id" id="">
								<option value="select">--Select--</option>
								<?php while($row=mysqli_fetch_assoc($resource_id)){ ?>
									<option value="<?php echo $row['category_id']; ?> "><?php echo $row['category_id']; ?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="btn" value="DELETE"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
