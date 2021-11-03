<?php 
require '../database/db_connect.php';

if(isset($_POST['btn'])){

	$sql=" insert into tbl_category (category_name) values ('$_POST[category_name]') ";

	if(mysqli_query($connection,$sql)){
		echo "<script>alert('Record saved!');</script>";
	}else{
		die('something wrong..!'.mysqli_error($connection));
	}

}


 ?>

<div id="admin_content">
	<div class="add_user_header">
		<h4>Add Category</h4>
	</div>
	<div id="add_user">
		<form action="" method="post">
			<fieldset>
				<table>
					<tr>
						<td>Category Name :</td>
						<td><input type="text" name="category_name" value=""></td>
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
