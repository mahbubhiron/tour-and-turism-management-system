
<?php 
require '../database/db_connect.php';
$sql="select * from tbl_subcategory";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}

?>

<div id="admin_content">
	<div class="add_user_header">
		<h4>View Subcategory</h4>
	</div>
	<div id="add_user">
		<table>
			<tr>
				<th>Subcategory Id</th>
				<th>Subcategory Name</th>
				<th>image</th>
			</tr>
			<?php while($result=mysqli_fetch_assoc($resource_id)) {?>
			<tr>
				<td><p><?php echo $result['subcategory_id']; ?></p></td>
				<td><p><?php echo $result['subcategory_name']; ?></p></td>
				<td><img src="<?php echo $result['subcategory_image']; ?>" alt="" style="height: 50px;width: 80px;"></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
