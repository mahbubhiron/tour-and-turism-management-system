
<?php 
require '../database/db_connect.php';
$s="select * from enquiry,tbl_package where enquiry.Packageid=tbl_package.package_id";
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
		<table style="margin-left: 0;">
				<tr>
					<th>Enquiry<br>Date</th>
					<th>package<br>Name</th>
					<th>Enquiry<br>Id</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Mobile No</th>
					<th>Email</th>
					<th>No. of<br>Days</th>
					<th>No. of<br>Child</th>
					<th>No. of <br>Adult</th>
					<th>Hotel</th>
					<!-- <th>Message</th>
 -->					<th>Status<br>Fiels</th>
				</tr>
				<?php while($result=mysqli_fetch_assoc($resource_id)) {?>
				<tr>
					<td><p><?php echo $result['enquiry_date']; ?></p></td>
					<td><p><?php echo $result['package_name']; ?></p></td>
					<td><p><?php echo $result['Enquiryid']; ?></p></td>
					<td><p><?php echo $result['Name']; ?></p></td>
					<td><p><?php echo $result['Gender']; ?></p></td>
					<td><p><?php echo $result['Mobileno']; ?></p></td>
					<td><p><?php echo $result['Email']; ?></p></td>
					<td><p><?php echo $result['NoofDays']; ?></p></td>
					<td><p><?php echo $result['Child']; ?></p></td>
					<td><p><?php echo $result['Adults']; ?></p></td>
					<td><p><?php echo $result['hotel_name']; ?></p></td>
					<!-- <td><p><?php echo $result['message']; ?></p></td>
 -->					<td><p><a href="admin_mastar.php?eid=<?php echo $result['Enquiryid']; ?>&amp;key=<?php echo $val; ?>"><?php echo $result['Statusfield']; ?></a></p>
					</td>
				</tr>
				<?php } ?>
		</table>
	</div>
</div>
