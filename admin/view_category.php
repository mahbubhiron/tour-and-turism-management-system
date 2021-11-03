<?php 
require '../database/db_connect.php';
$sql="select * from tbl_category";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}

?>

<div id="admin_content">
	<div class="add_user_header">
		<h4>View Category</h4>
	</div>
	<div id="add_user">
		<table>
				<tr>
					<th>Category Id</th>
					<th>Category Name</th>
				</tr>
				<?php while($result=mysqli_fetch_assoc($resource_id)) {?>
				<tr>
					<td><p><?php echo $result['category_id']; ?></p></td>
					<td><p><?php echo $result['category_name']; ?></p></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>
