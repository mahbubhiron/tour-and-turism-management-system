<?php 

require 'database/db_connect.php';

if(isset($_POST['btn'])){
	$name=$_POST['name'];
$contact_no=$_POST['contact_no'];
$email=$_POST['email'];
$details=$_POST['details'];

$sql="insert into tbl_contact (name,phn_no,email,details) values('$name','$contact_no','$email','$details')";

if(mysqli_query($connection,$sql)){
	echo "<script>alert('Data insert succefully');</script>";
}else{
	die('error'.mysqli_error($connection));
}

}

 ?>


<div class="contact_container">
			<div class="about_header">
				<h2><ins>Contact Us</ins></h2>
		    </div>
			<div class="contact_address">
				<h3><ins>X3 Team Work</ins></h3>
				<p>NEED HELP BOOKING PACKAGE :<br/> For fantastic suggestions you may also call our travel exper</p>
				<p><img src="assets/image/contact.jpg" alt="">+880 01914-679736</p>
				<p><img src="assets/image/m.jpg" alt="">mhalom19@gmail.com</p>
				<p><img src="assets/image/locater.png" alt="">Mirpur-2,Dhaka,Bangladesh. . .</p>
				<h3><ins>Our Location :</ins></h3>
			</div>
			<div class="contact_location">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14602.254327744693!2d90.36542149794887!3d23.798550306097894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smirpur%202!5e0!3m2!1sen!2sbd!4v1578078159272!5m2!1sen!2sbd" width="675" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="contact_info">
				<form action="" method="post">
					<table >
						<tr>
							<td><input type="text" name="name" placeholder="Enter your name"></td>
						</tr>
						<tr>
							<td><input type="text" name="contact_no" placeholder="Enter your Contact number"></td>
						</tr>
						<tr>
							<td><input type="email" name="email" placeholder="Enter your email"></td>
						</tr>
						<tr>
							<td>
								<textarea name="details" id="" cols="40" rows="5" placeholder="Write your message"></textarea>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="btn" value="send message"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>