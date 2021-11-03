<?php 

require '../database/db_connect.php';

if(isset($_POST["btn"]))
{
	$s="delete from tbl_subcategory  where subcategory_id='" . $_POST["sub_id"] . "'";
	mysqli_query($connection,$s);
	echo "<script>alert('Record Delete');</script>";
}

 ?>

<div id="admin_content">
	<div class="add_user_header">
		<h4>Delete Subcategory</h4>
	</div>
	<div id="add_user">
		<form action="" method="post">
			<fieldset>
				<table>
					<tr>
						<td>Select category :</td>
						<td>
							<select name="category_id" id="">
								<option value="select_category">--Select--</option>

								<?php

								$s="select * from tbl_category";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);

								while($data=mysqli_fetch_array($result))
								{
										if(isset($_POST["show_category"])&& $data[0]==$_POST["category_id"])
										{
										echo "<option value=$data[0] selected>$data[1]</option>";
										}
										else
										{
											echo "<option value=$data[0]>$data[1]</option>";
										}
									
								}
								?>

							</select>
							<input type="submit" name="show_category" value="Show">
						</td>
					</tr>
					<tr>
						<td>Select Subcategory :</td>
						<td>
						<select name="sub_id" id="">
							<option value="select">--Select--</option>

							<?php
							if(isset($_POST["show_category"]))
							{

							$s="select * from tbl_subcategory where category_name='" . $_POST["category_id"] ."'";
							$result=mysqli_query($connection,$s);
							$r=mysqli_num_rows($result);
							while($data=mysqli_fetch_array($result))
							{
								echo "<option value=$data[0]>$data[1]</option>";		
							}
							mysqli_close($cn);
							}
							?>

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
