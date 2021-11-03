
<?php 

require '../database/db_connect.php';

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
	$sub_id=$_POST['sub_id'];
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
			$sql="insert into tbl_package (package_name,category,subcategory,package_price,place_img_one,place_img_two,place_img_three,hotel_name_one,hotelone_img_one,hotelone_img_two,hotelone_img_three,hotel_link_one,hotel_name_two,hoteltwo_img_one,hoteltwo_img_two,hoteltwo_img_three,hotel_link_two,hotel_name_three,hotelthree_img_one,hotelthree_img_two,hotelthree_img_three,hotel_link_three,package_details) values ('$package_name','$category_id','$sub_id','$package_price','$target_file1','$target_file2','$target_file3','$h_n_1','$target_file4','$target_file5','$target_file6','$h_l_1','$h_n_2','$target_file7','$target_file8','$target_file9','$h_l_2','$h_n_3','$target_file10','$target_file11','$target_file12','$h_l_3','$details')";
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
		<h4>Add Package</h4>
	</div>
	<div id="add_user">
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				
				<table>
					<tr>
						<td colspan="3">Package Name :</td>
						<td colspan="2"><input type="text" name="package_name" value=""></td>
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

								while($data=mysqli_fetch_array($result))
								{
										if(isset($_POST["show_category"])&& $data[0]==$_POST["category_id"])
										{
										echo "<option value=$data[0] selected>$data[1]</option>";
										}
										else
										{
											echo "<option value=$data[0] selected>$data[1]</option>";
										}
									
								}
								?>
							</select>
							<input type="submit" name="show_category" value="Show">
						</td>
					</tr>
					<tr>
						<td colspan="3">Select subCategory :</td>
						<td colspan="2">
						<select name="sub_id" id="">
							<option value="">--Select--</option>
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
						<td colspan="3">Package Price :</td>
						<td colspan="2"><input type="number" name="package_price" value=""></td>
					</tr>
					<tr>
						<td colspan="3">Place image-1 :</td>
						<td colspan="2"><input type="file" name="pi_1" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Place image-2 :</td>
						<td colspan="2"><input type="file" name="pi_2" value="Chose file"></td>
					</tr>	
					<tr>
						<td colspan="3">Place image-3 :</td>
						<td colspan="2"><input type="file" name="pi_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Name One :</td>
						<td colspan="2"><input type="Text" name="h_n_1" value=""></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Image One :</td>
						<td><input type="file" name="h1i_1" value="Chose file"></td>
						<td><input type="file" name="h1i_2" value="Chose file"></td>
						<td><input type="file" name="h1i_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Link One :</td>
						<td colspan="2"><input type="Text" name="h_l_1" value=""></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Name Two :</td>
						<td colspan="2"><input type="Text" name="h_n_2" value=""></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Image Two :</td>
						<td><input type="file" name="h2i_1" value="Chose file"></td>
						<td><input type="file" name="h2i_2" value="Chose file"></td>
						<td><input type="file" name="h2i_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Link Two :</td>
						<td colspan="2"><input type="Text" name="h_l_2" value=""></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Name Three :</td>
						<td colspan="2"><input type="Text" name="h_n_3" value=""></td>
					</tr>
					<tr>
						<td colspan="2">Hotel Image Three :</td>
						<td><input type="file" name="h3i_1" value="Chose file"></td>
						<td><input type="file" name="h3i_2" value="Chose file"></td>
						<td><input type="file" name="h3i_3" value="Chose file"></td>
					</tr>
					<tr>
						<td colspan="3">Hotel Link Three :</td>
						<td colspan="2"><input type="Text" name="h_l_3" value=""></td>
					</tr>
					<tr>
						<td colspan="3">Details :</td>
						<td colspan="2"><textarea name="details" id="" cols="30" rows="5"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="5"><input type="submit" name="btn" value="SAVE" style="margin-left: 210px;"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
