
<?php 

require '../database/db_connect.php';

if(isset($_POST["show"]))
{
	$s="delete from tbl_advertiesment  where a_id='$_POST[a_id]' ";
	mysqli_query($connection,$s);
	echo "<script>alert('Record Delete');</script>";
}


?>


<div id="admin_content">
	<div class="add_user_header">
		<h4>Delete Advertisement</h4>
	</div>
	<div id="add_user">
		<form action="" method="post">
			<fieldset>
				
				<table>
					<tr>
						<td>Select Package :</td>
						<td>
						<select name="a_id" id="">
							<option value="select">--Select--</option>
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
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="show" value="Delete"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
