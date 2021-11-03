<?php 
require '../database/db_connect.php';
$sql="select * from tbl_advertiesment";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}

?>

<div id="admin_content_view_package">
	<div class="add_user_header">
		<h4>View Adviertisement</h4>
	</div>
	<div id="add_user">
		<table style="margin-left: 0.5%;">

				<tr>
					<th>Id</th>
					<th>Title</th>
					<th>Category</th>
					<th>SubCategory</th>
					<th>Package</th>
					<th>Company <br> name</th>
					<th>image <br>one</th>
					<th>image <br>two</th>
					<th>image <br>three</th>
					<th>Offer</th>
				</tr>
				<?php while($result=mysqli_fetch_assoc($resource_id)) {
					?>
				<tr>
					<td><p><?php echo $result['a_id']; ?></p></td>
					<td><p><?php echo $result['title']; ?></p></td>
					<td><p><?php echo $result['category']; ?></p></td>
					<td><p><?php echo $result['subcategory']; ?></p></td>
					<td><p><?php echo $result['package']; ?></p></td>
					<td><p><?php echo $result['company_name']; ?></p></td>
					<td>
						<img src="<?php echo $result['a_img_1']; ?>" style="width: 40px;height: 40px;">
					</td>
					<td>
						<img src="<?php echo $result['a_img_2']; ?>" style="width: 40px;height: 40px;">
					</td>
					<td>
						<img src="<?php echo $result['a_img_3']; ?>" style="width: 40px;height: 40px;">
					</td>
					<td><p><?php echo $result['offer']; ?></p></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>
