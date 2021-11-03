
<?php 

require '../database/db_connect.php';

if(isset($_POST["show_package"]))
{
	$s="delete from tbl_package  where package_id='$_POST[package_id]' ";
	mysqli_query($connection,$s);
	echo "<script>alert('Record Delete');</script>";
}


 ?>

<div id="admin_content1">
	<div class="add_user_header">
		<h4>Delete Package</h4>
	</div>
	<div id="delete_user">
		<form action="" method="post">
			<fieldset>
				<table>
					<tr>
						<td>Select Package :</td>
						<td>
						<select name="package_id" id="">
							<option value="select">--Select--</option>
							<?php

								$s="select * from tbl_package";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);
								//echo $r;

								while($data=mysqli_fetch_array($result))
								{
									if(isset($_POST["show_package"])&& $data[0]==$_POST["package_id"])
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
						<td></td>
						<td><input type="submit" name="show_package" value="Delete"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
