  
<?php 
require '../database/db_connect.php';
$s="select * from enquiry,tbl_package where enquiry.Packageid=tbl_package.package_id and enquiry.Statusfield = 'Cancel' ";
if(mysqli_query($connection,$s)){
	$resource_id=mysqli_query($connection,$s);
}else{
	die('not view'.mysqli_error($connection));
}


?>

<?php 

$val=$_SESSION['val'];


 ?>
<div id="admin_content_view_package">
	<div class="add_user_header">
		<h4>Confirm Tour</h4>
	</div>
	<div id="add_user">
		<table style="margin-left: 0.5%;">
				<tr>
					<th>Enquiry<br>Id</th>
					<th>package<br>Id</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Mobile No</th>
					<th>No. of<br>Days</th>
					<th>No. of<br>Child</th>
					<th>No. of <br>Adult</th>
					<th>Hotel</th>
					<th>Message</th>
					<th>Status<br>Fiels</th> 
				</tr>
				<?php while($result=mysqli_fetch_assoc($resource_id)) {?>
				<tr>
					<td><p><?php echo $result['Enquiryid']; ?></p></td>
					<td><p><?php echo $result['package_id']; ?></p></td>
					<td><p><?php echo $result['Name']; ?></p></td>
					<td><p><?php echo $result['Gender']; ?></p></td>
					<td><p><?php echo $result['Mobileno']; ?></p></td>
					<td><p><?php echo $result['NoofDays']; ?></p></td>
					<td><p><?php echo $result['Child']; ?></p></td>
					<td><p><?php echo $result['Adults']; ?></p></td>
					<td><p><?php echo $result['hotel_name']; ?></p></td>
					<td><p><?php echo $result['message']; ?></p></td>
					<td><p><a href="admin_mastar.php?del_id=<?php echo $result['Enquiryid']; ?>&amp;key=<?php echo $val; ?>">Delete</a></p>
					</td>
				</tr>
				<?php } ?>

				<?php 

				if (isset($_GET['del_id'])) {
					$del_id=$_GET['del_id'];

					$query = "delete from enquiry where Enquiryid = $del_id ";

					 $result = mysqli_query($connection,$query);
					 if ($result) {
					 	echo "<script>alert('data has been deleted');</script>";
					 	echo "<script>window.location.h ref = 'view_cancel_inquiry.php' </script>";
					 	// header("Location:view_cancel_inquiry.php");
					 }
				}

				 ?>
		</table>
	</div>
</div>
