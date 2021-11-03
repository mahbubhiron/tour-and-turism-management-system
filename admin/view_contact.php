
<?php 
require '../database/db_connect.php';
$sql="select * from tbl_contact";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}

?>



<div id="admin_content_view_package">
	<div class="add_user_header">
		<h4>View Contact</h4>
	</div>
	<div id="add_user">
		<table style="margin-left: 0.5%;">
				<tr>
					<th>Id</th>
					<th>User Name</th>
					<th>User<br>phone_no</th>
					<th>User<br>Email</th>
					<th>details</th>
				</tr>
				<?php while($result=mysqli_fetch_assoc($resource_id)) {?>
				<tr>
					<td><p><?php echo $result['contact_id']; ?></p></td>
					<td><p><?php echo $result['name']; ?></p></td>
					<td><p><?php echo $result['phn_no']; ?></p></td>
					<td><p><?php echo $result['email']; ?></p></td>
					<td><p><?php echo $result['details']; ?></p></td>
				<?php } ?>
		</table>
	</div>
</div>
