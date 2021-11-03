
<?php 
require '../database/db_connect.php';
$sql="select * from tbl_package";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}

?>



<div id="admin_content_view_package">
	<div class="add_user_header">
		<h4>View Package</h4>
	</div>
	<div id="add_user">
		<table style="margin-left: 0.5%;">
				<tr>
					<th>Id</th>
					<th>package Name</th>
					<th>Category</th>
					<th>Sub <br>Category</th>
					<th>Price</th>
					<th>place <br>one</th>
					<th>place <br>two</th>
					<th>place <br>three</th>
					<th>Hotel <br>one</th>
					<th>Hotel <br>two</th>
					<th>Hotel <br>three</th>
				</tr>
				<?php while($result=mysqli_fetch_assoc($resource_id)) {?>
				<tr>
					<td><p><?php echo $result['package_id']; ?></p></td>
					<td><p><?php echo $result['package_name']; ?></p></td>
					<td><p><?php echo $result['category']; ?></p></td>
					<td><p><?php echo $result['subcategory']; ?></p></td>
					<td><p><?php echo $result['package_price']; ?></p></td>
					<td align="center"><img src="<?php echo $result['place_img_one']; ?>" style="width: 40px;height: 40px;"></td>
					<td align="center"><img src="<?php echo $result['place_img_two']; ?>" style="width: 40px;height: 40px;"></td>
					<td align="center"><img src="<?php echo $result['place_img_three']; ?>" style="width: 40px;height: 40px;"></td>
					<td align="center">
						<p><?php echo $result['hotel_name_one']; ?></p>
						<img src="<?php echo $result['hotelone_img_one']; ?>" style="width: 40px;height: 40px;">
						<a href="<?php echo $result['hotel_link_one']; ?>">linkone</a>
					</td>
					<td align="center">
						<p><?php echo $result['hotel_name_two']; ?></p>
						<img src="<?php echo $result['hoteltwo_img_one']; ?>" style="width: 40px;height: 40px;">
						<a href="<?php echo $result['hotel_link_two']; ?>">linktwo</a>
					</td>
					<td align="center">
						<p><?php echo $result['hotel_name_three']; ?></p>
						<img src="<?php echo $result['hotelthree_img_one']; ?>" style="width: 40px;height: 40px;">
						<a href="<?php echo $result['hotel_link_three']; ?>">linkthree</a>
					</td>
				</tr>
				<?php } ?>
		</table>
	</div>
</div>
