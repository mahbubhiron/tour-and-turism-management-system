
<?php
require 'database/db_connect.php';

?>
 <?php 

		if(isset($_POST['submit'])){
		$data=$_POST['search'];
		// $s="select * from tbl_package where package_name='$data'";
		if(!empty($data)){
		$s="select * from tbl_package,tbl_category,tbl_subcategory where tbl_package.category=tbl_category.category_id and tbl_package.subcategory=tbl_subcategory.subcategory_id and tbl_package.package_name= '$data' ";
		if($result=mysqli_query($connection,$s)){
			$r=mysqli_num_rows($result);
		$data=mysqli_fetch_assoc($result);
		if(!empty($data)){

		?>

<div class="subcategory_container">
	<div classp_id="subcategory_content">
		<h3 style="width: 100%;
	text-align: center;
	padding: 20px;
	color: #56C1E0;
	font-weight: 600;
	font-family: bold;
	font-size: 40px;">View Package</h3>
	</div>
	<div class="row">
		  <table>
		  	<tr>
		  		<td style="padding: 10px;">Package Name :</td>
		  		<td style="padding: 10px;"><?php echo $data['package_name']; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['place_img_one']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['place_img_two']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['place_img_three']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Category :</td>
		  		<td style="padding: 10px;"><?php echo $data['category_name']; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">SubCategory :</td>
		  		<td style="padding: 10px;"><?php echo $data['subcategory_name']; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Package Price :</td>
		  		<td style="padding: 10px;"><?php echo $data['package_price']; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel One :</td>
		  		<td style="padding: 10px;"><?php echo $data['hotel_name_one']; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="aadmin/<?php echo $data['hotelone_img_one']; ?>dmin/image/6.jpg" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hotelone_img_two']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hotelone_img_three']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel One Link :</td>
		  		<td style="padding: 10px;"><a href="<?php echo $data['hotel_link_one']; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Two :</td>
		  		<td><?php echo $data['hotel_name_two']; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hoteltwo_img_one']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hoteltwo_img_two']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hoteltwo_img_three']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Two Link :</td>
		  		<td style="padding: 10px;"><a href="<?php echo $data['hotel_link_two']; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Three :</td>
		  		<td style="padding: 10px;"><?php echo $data['hotel_name_three']; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hotelthree_img_one']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hotelthree_img_two']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data['hotelthree_img_three']; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Three Link :</td>
		  		<td style="padding: 10px;"><a href="<?php echo $data['hotel_link_three']; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td colspan="3" style="padding: 10px;"><?php echo $data['package_details']; ?>.</td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">
		  			<a href="?pid=<?php echo $data['package_id']; ?>">
		  				<input type="submit" name="btn" value="Confirm Tour!">
		  			</a>
		  		</td>
		  		<td></td>
		  		<td style="padding: 10px;">
		  			<a href="?key3=<?php echo 17; ?>">
		  				<input type="submit" name="btn" value="Cancel Tour!">
		  			</a>
		  		</td>
		  	</tr>
		  	<tr>
		  		<td colspan="3">
		  			<?php include 'Comment/index.php'; ?>
		  		</td>
		  	</tr>
		  </table>
	</div>
</div>



		<?php
	}
	else{
			include 'category_description.php';
		}
	}
		}else{
			include 'category_description.php';
		}
			
		}

		 ?>

