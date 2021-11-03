
<?php
require 'database/db_connect.php';

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
	  <?php 

	 $s="select * from tbl_package,tbl_category,tbl_subcategory where tbl_package.category=tbl_category.category_id and tbl_package.subcategory=tbl_subcategory.subcategory_id and tbl_package.package_id='" . $_GET["p_id"] ."'";
		if($result=mysqli_query($connection,$s)){
			
		}
		else{
			die('error'.mysqli_error($connection));
		}
		$r=mysqli_num_rows($result);
		$data=mysqli_fetch_array($result);
		 ?>
		  	<tr>
		  		<td style="padding: 10px;">Package Name :</td>
		  		<td style="padding: 10px;"><?php echo $data[1]; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[5]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[5]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[7]; ?>" alt="" style="height: 200px;width: 300px;"></td>
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
		  		<td style="padding: 10px;"><?php echo $data[4]; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel One :</td>
		  		<td style="padding: 10px;"><?php echo $data[8]; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="aadmin/<?php echo $data[9]; ?>dmin/image/6.jpg" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[10]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[11]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel One Link :</td>
		  		<td style="padding: 10px;"><a href="<?php echo $data[12]; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Two :</td>
		  		<td><?php echo $data[13]; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[14]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[15]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[16]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Two Link :</td>
		  		<td style="padding: 10px;"><a href="<?php echo $data[17]; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Three :</td>
		  		<td style="padding: 10px;"><?php echo $data[18]; ?></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[19]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[20]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  		<td style="padding: 10px;"><img src="admin/<?php echo $data[21]; ?>" alt="" style="height: 200px;width: 300px;"></td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">Hotel Three Link :</td>
		  		<td style="padding: 10px;"><a href="<?php echo $data[22]; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td colspan="3" style="padding: 10px;"><?php echo $data[23]; ?>.</td>
		  	</tr>
		  	<tr>
		  		<td style="padding: 10px;">
		  			<a href="?pid=<?php echo $data[0]; ?>">
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