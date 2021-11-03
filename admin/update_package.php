
<?php
if(isset($_POST["show_category"]))
{
require '../database/db_connect.php';
$s="select * from tbl_package where package_id='" .$_POST["package_id"] ."'";
$result=mysqli_query($connection,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Packid=$data[0];
$Packname=$data[1];
$Category=$data[2];
$Subcategory=$data[3];
$Packprice=$data[4];
$place_img_one=$data[5];
$place_img_two=$data[6];
$place_img_three=$data[7];
$hotel_name_one=$data[8];
$hotelone_img_one=$data[9];
$hotelone_img_two=$data[10];
$hotelone_img_three=$data[11];
$hotel_link_one=$data[12];
$hotel_name_two=$data[13];
$hoteltwo_img_one=$data[14];
$hoteltwo_img_two=$data[15];
$hoteltwo_img_three=$data[16];
$hotel_link_two=$data[17];
$hotel_name_three=$data[18];
$hotelthree_img_one=$data[19];
$hotelthree_img_two=$data[20];
$hotelthree_img_three=$data[21];
$hotel_link_three=$data[22];
$package_details=$data[23];

}




// upate query

if(isset($_POST['btn'])){

// package image variable start
	$target_file1="image/package/".$_FILES['pi_1']['name'];
	$f_t1=pathinfo($target_file1,PATHINFO_EXTENSION);
	$target_file2="image/package/".$_FILES['pi_2']['name'];
	$f_t2=pathinfo($target_file2,PATHINFO_EXTENSION);
	$target_file3="image/package/".$_FILES['pi_3']['name'];
	$f_t3=pathinfo($target_file3,PATHINFO_EXTENSION);

// package image variable close

// hotel image variable start
	$target_file4="image/package/hotel/".$_FILES['h1i_1']['name'];
	$f_t4=pathinfo($target_file1,PATHINFO_EXTENSION);
	$target_file5="image/package/hotel/".$_FILES['h1i_2']['name'];
	$f_t5=pathinfo($target_file2,PATHINFO_EXTENSION);
	$target_file6="image/package/hotel/".$_FILES['h1i_3']['name'];
	$f_t6=pathinfo($target_file3,PATHINFO_EXTENSION);

	$target_file7="image/package/hotel/".$_FILES['h2i_1']['name'];
	$f_t7=pathinfo($target_file1,PATHINFO_EXTENSION);
	$target_file8="image/package/hotel/".$_FILES['h2i_2']['name'];
	$f_t8=pathinfo($target_file2,PATHINFO_EXTENSION);
	$target_file9="image/package/hotel/".$_FILES['h2i_3']['name'];
	$f_t9=pathinfo($target_file3,PATHINFO_EXTENSION);

	$target_file10="image/package/hotel/".$_FILES['h3i_1']['name'];
	$f_t10=pathinfo($target_file1,PATHINFO_EXTENSION);
	$target_file11="image/package/hotel/".$_FILES['h3i_2']['name'];
	$f_t11=pathinfo($target_file2,PATHINFO_EXTENSION);
	$target_file12="image/package/hotel/".$_FILES['h3i_3']['name'];
	$f_t12=pathinfo($target_file3,PATHINFO_EXTENSION);

// hotel image variable close

// input variable start
	$package_name=$_POST['package_name'];
	$category_id=$_POST['category_id'];
	$sub_id=$_POST['sub_c_id'];
	$package_price=$_POST['package_price'];
	$h_n_1=$_POST['h_n_1'];
	$h_l_1=$_POST['h_l_1'];
	$h_n_2=$_POST['h_n_2'];
	$h_l_2=$_POST['h_l_2'];
	$h_n_3=$_POST['h_n_3'];
	$h_l_3=$_POST['h_l_3'];
	$details=$_POST['details'];
// input variable close

	if(!file_exists($target_file1) || !file_exists($target_file2) || !file_exists($target_file3)){

		if(($f_t1 !="jpg" && $f_t1 != "png" && $f_t1 != "jpeg" && $f_t1 != "gif") && ($f_t2 !="jpg" && $f_t2 != "png" && $f_t2 != "jpeg" && $f_t2 != "gif") && ($f_t3 !="jpg" && $f_t3 != "png" && $f_t3 != "jpeg" && $f_t3 != "gif")){

			echo "image is not jpg,png,jpeg or gif please upload type of image";

		}else if(($f_t4 !="jpg" && $f_t4 != "png" && $f_t4 != "jpeg" && $f_t4 != "gif") && ($f_t5 !="jpg" && $f_t5 != "png" && $f_t5 != "jpeg" && $f_t5 != "gif") && ($f_t6 !="jpg" && $f_t6 != "png" && $f_t6 != "jpeg" && $f_t6 != "gif")){
			echo "image is not jpg,png,jpeg or gif please upload type of image";
		}else if(($f_t7 !="jpg" && $f_t7 != "png" && $f_t7 != "jpeg" && $f_t7 != "gif") && ($f_t8 !="jpg" && $f_t8 != "png" && $f_t8 != "jpeg" && $f_t8 != "gif") && ($f_t9 !="jpg" && $f_t9 != "png" && $f_t9 != "jpeg" && $f_t9 != "gif")){
			echo "image is not jpg,png,jpeg or gif please upload type of image";
		}else if(($f_t10 !="jpg" && $f_t10 != "png" && $f_t10 != "jpeg" && $f_t10 != "gif") && ($f_t11 !="jpg" && $f_t11 != "png" && $f_t11 != "jpeg" && $f_t11 != "gif") && ($f_t12 !="jpg" && $f_t12 != "png" && $f_t12 != "jpeg" && $f_t12 != "gif")){
			echo "image is not jpg,png,jpeg or gif please upload type of image";
		}else{
			move_uploaded_file($_FILES['pi_1']['tmp_name'], $target_file1); 
			move_uploaded_file($_FILES['pi_2']['tmp_name'], $target_file2); 
			move_uploaded_file($_FILES['pi_3']['tmp_name'], $target_file3);
			move_uploaded_file($_FILES['h1i_1']['tmp_name'], $target_file4); 
			move_uploaded_file($_FILES['h1i_2']['tmp_name'], $target_file5); 
			move_uploaded_file($_FILES['h1i_3']['tmp_name'], $target_file6);
			move_uploaded_file($_FILES['h2i_1']['tmp_name'], $target_file7); 
			move_uploaded_file($_FILES['h2i_2']['tmp_name'], $target_file8); 
			move_uploaded_file($_FILES['h2i_3']['tmp_name'], $target_file9);
			move_uploaded_file($_FILES['h3i_1']['tmp_name'], $target_file10); 
			move_uploaded_file($_FILES['h3i_2']['tmp_name'], $target_file11); 
			move_uploaded_file($_FILES['h3i_3']['tmp_name'], $target_file12);
			// echo "<script>alert('image uploaded');</script>";
			$sql="update tbl_package set package_name='$package_name',category='$category_id',subcategory='$sub_id',package_price='$package_price',place_img_one='$target_file1',place_img_two='$target_file2',place_img_three='$target_file3',hotel_name_one='$h_n_1',hotelone_img_one='$target_file4',hotelone_img_two='$target_file5',hotelone_img_three='$target_file6',hotel_link_one='$h_l_1',hotel_name_two='$h_n_2',hoteltwo_img_one='$target_file7',hoteltwo_img_two='$target_file8',hoteltwo_img_three='$target_file9',hotel_link_two='$h_l_2',hotel_name_three='$h_n_3',hotelthree_img_one='$target_file10',hotelthree_img_two='$target_file11',hotelthree_img_three='$target_file12',hotel_link_three='$h_l_3',package_details='$details' where package_id='$_POST[package_id]' ";
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
		<h4>Update Package</h4>
	</div>
	<div id="add_user">
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				
				<table>
					<tr>
						<td colspan="3">Select Package :</td>
						<td colspan="2">
							<select name="package_id" id="">
								<option value="">--Select--</option>
								<?php

								$s="select * from tbl_package";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);
								//echo $r;

								while($data=mysqli_fetch_array($result))
								{
									if(isset($_POST["show_category"])&& $data[0]==$_POST["package_id"])
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
							<input type="submit" name="show_category" value="Show">
						</td>
					</tr>
					<tr>
						<td colspan="3">Package Name :</td>
						<td colspan="2"><input type="text" name="package_name" value="<?php if(isset($_POST["show_category"])){ echo $Packname ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="3">Select category :</td>
						<td colspan="2">
							<select name="category_id" id="">
								<option value="">--Select--</option>
								<?php

								$s="select * from tbl_category";
								$result=mysqli_query($connection,$s);
								$r=mysqli_num_rows($result);
								//echo $r;

								while($data=mysqli_fetch_array($result))
								{
									if(isset($_POST["show_category"])&& $Category==$data[0])
									{
										
										echo "<option value=$data[0] selected='selected' >$data[1]</option>";
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
						<td colspan="3">Select subCategory :</td>
						<td colspan="2">
						<select name="sub_c_id" id="">
							<option value="">--Select--</option>
							<?php

							$s="select * from tbl_subcategory";
							$result=mysqli_query($connection,$s);
							$r=mysqli_num_rows($result);
							//echo $r;

							while($data=mysqli_fetch_array($result))
							{
								if(isset($_POST["show_category"])&& $Subcategory==$data[0])
								{
									
									echo "<option value=$data[0] selected='selected' >$data[1]</option>";
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
						<td colspan="3">Package Price :</td>
						<td colspan="2"><input type="number" name="package_price" value="<?php if(isset($_POST["show_category"])){ echo $Packprice ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="3">Old Pic-1 :</td>
						<td colspan="2"><img src="<?php echo $place_img_one; ?>" alt=""></td>
					</tr>
					<tr>
						<td colspan="3">Upload Pic-1 :</td>
						<td colspan="2"><input type="file" name="pi_1" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Old Pic-2 :</td>
						<td colspan="2"><img src="<?php echo $place_img_two; ?>" alt=""></td>
					</tr>
					<tr>
						<td colspan="3">Upload Pic-2 :</td>
						<td colspan="2"><input type="file" name="pi_2" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Old Pic-3 :</td>
						<td colspan="2"><img src="<?php echo $place_img_three; ?>" alt=""></td>
					</tr>	
					<tr>
						<td colspan="3">Upload Pic-3 :</td>
						<td colspan="2"><input type="file" name="pi_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Name One :</td>
						<td colspan="2"><input type="Text" name="h_n_1" value="<?php if(isset($_POST["show_category"])){ echo $hotel_name_one ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="2">Hotel One old image :</td>
						<td style="width: 35%;margin-left: 5%;"><img src="<?php echo $hotelone_img_one; ?>" alt=""></td>
						<td colspan=""><img src="<?php echo $hotelone_img_two; ?>" alt=""></td>
						<td colspan=""><img src="<?php echo $hotelone_img_three; ?>" alt=""></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Image One :</td>
						<td style="width: 35%;margin-left: 5%;"><input type="file" name="h1i_1" value="Chose file"></td>
						<td><input type="file" name="h1i_2" value="Chose file"></td>
						<td><input type="file" name="h1i_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Link One :</td>
						<td colspan="2"><input type="Text" name="h_l_1" value="<?php if(isset($_POST["show_category"])){ echo $hotel_link_one ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Name Two :</td>
						<td colspan="2"><input type="Text" name="h_n_2" value="<?php if(isset($_POST["show_category"])){ echo $hotel_name_two ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Two old image :</td>
						<td style="width: 35%;margin-left: 5%;"><img src="<?php echo $hoteltwo_img_one; ?>" alt=""></td>
						<td colspan=""><img src="<?php echo $hoteltwo_img_two; ?>" alt=""></td>
						<td colspan=""><img src="<?php echo $hoteltwo_img_three; ?>" alt=""></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Image Two :</td>
						<td><input type="file" name="h2i_1" value="Chose file"></td>
						<td><input type="file" name="h2i_2" value="Chose file"></td>
						<td><input type="file" name="h2i_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Link Two :</td>
						<td colspan="2"><input type="Text" name="h_l_2" value="<?php if(isset($_POST["show_category"])){ echo $hotel_link_two ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Name Three :</td>
						<td colspan="2"><input type="Text" name="h_n_3" value="<?php if(isset($_POST["show_category"])){ echo $hotel_name_three ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Three old image :</td>
						<td style="width: 35%;margin-left: 5%;"><img src="<?php echo $hotelthree_img_one; ?>" alt=""></td>
						<td colspan=""><img src="<?php echo $hotelthree_img_two; ?>" alt=""></td>
						<td colspan=""><img src="<?php echo $hotelthree_img_three; ?>" alt=""></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Image Three :</td>
						<td><input type="file" name="h3i_1" value="Chose file"></td>
						<td><input type="file" name="h3i_2" value="Chose file"></td>
						<td><input type="file" name="h3i_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Link Three :</td>
						<td colspan="2"><input type="Text" name="h_l_3" value="<?php if(isset($_POST["show_category"])){ echo $hotel_link_three ;} ?>"></td>
					</tr>
					<tr>
						<td colspan="3">Details :</td>
						<td colspan="2"><textarea name="details" id="" cols="30" rows="5"><?php if(isset($_POST["show_category"])){ echo $package_details ;} ?></textarea></td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td colspan="2"><input type="submit" name="btn" value="UPDATE"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
