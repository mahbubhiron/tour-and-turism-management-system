<?php 

require 'database/db_connect.php';

 ?>

<?php
if(isset($_POST["btn"]))
{

	$s="insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,hotel_name,message,Statusfield) values('" . $_REQUEST["pid"] ."','" . $_POST["u_name"] ."','" . $_POST["r1"] ."','" . $_POST["u_no"] ."','" . $_POST["u_mail"] ."','" . $_POST["stay_days"] ."','" . $_POST["child_no"] ."','" . $_POST["adult_no"] ."','" . $_POST["t7"] ."','" . $_POST["t8"] ."','Pending')";	
	
	
		if(mysqli_query($connection,$s)){
			echo "<script>alert('Record Save');</script>";
// 			echo "<script>
// function myFunction() {
//   window.print();
// }
// </script>";
		}else{
			die('data not save'.mysqli_error($connection));
		}
	
}
?>

<?php 

$sql="select * from tbl_package";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}
?>

<?php

$s="select * from tbl_package where package_id='" . $_GET["pid"] ."'";

$result=mysqli_query($connection,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
?>

<div class="subcategory_container">
	<div class="subcategory_content">
		<h3>Enquiry</h3>
	</div>
	<div class="row1">
		  <form action="" method="post">
		  	<table>
		  	<tr>
		  		<td>Package ID :</td>
		  		<td><?php echo $data[0];?></td>
		  	</tr>
		  	<tr>
		  		<td>Package Name :</td>
		  		<td><?php echo $data[1];?></td>
		  	</tr>
		  	<tr>
		  		<td>Name :</td>
		  		<td><input type="text" name="u_name" ></td>
		  	</tr>
		  	<tr>
		  		<td>Gender :</td>
		  		<td>
		  			<input type="radio" name="r1" value="male" checked="checked">Male
		  			<input type="radio" name="r1" value="female" checked="checked">Female
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>Phone No :</td>
		  		<td><input type="text" name="u_no"></td>
		  	</tr>
		  	<tr>
		  		<td>Email :</td>
		  		<td><input type="email" name="u_mail"></td>
		  	</tr>
		  	<tr>
		  		<td>No. Of Days :</td>
		  		<td><input type="text" name="stay_days"></td>
		  	</tr>
		  	<tr>
		  		<td>No. of Cliddren :</td>
		  		<td><input type="text" name="child_no"></td>
		  	</tr>
		  	<tr>
		  		<td>No. of Adult :</td>
		  		<td><input type="text" name="adult_no"></td>
		  	</tr>
		  	<tr>
		  		<td>Hotel Name :</td>
		  		<td>
		  			<select name="t8" id="">
		  				<option value="">--Select Hotel--</option>
		  				<?php

		  				$s="select * from tbl_package where package_id='" . $_GET["pid"] ."'";

						$result=mysqli_query($connection,$s);
						$r=mysqli_num_rows($result); 

		  				while($row=mysqli_fetch_assoc($result)){

		  				?>
		  				<option value="<?php echo $row['hotel_name_one']; ?> "><?php echo $row['hotel_name_one']; ?></option>
						<option value="<?php echo $row['hotel_name_two']; ?> "><?php echo $row['hotel_name_two']; ?></option>
						<option value="<?php echo $row['hotel_name_three']; ?> "><?php echo $row['hotel_name_three']; ?></option>
		  				<?php } ?>
		  			</select>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td>Enwuiry Message :</td>
		  		<td>
		  			<textarea name="t7" id="" cols="30" rows="5"></textarea>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td></td>
		  		<td><input type="submit" name="btn" value="Confirm!" ></td>
		  	</tr>
		  </table>
		</form>
	</div>
</div>
