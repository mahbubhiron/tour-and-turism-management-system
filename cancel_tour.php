<div class="subcategory_container">
	<div classp_id="subcategory_content">
		<h3 style="width: 100%;
	text-align: center;
	padding: 20px;
	color: #56C1E0;
	font-weight: 600;
	font-family: bold;
	font-size: 40px;">Cancel Tour</h3>
	</div>
	<div class="row">
	 <table cellpadding="0px" cellspacing="0" width="100%">
<tr>
	<td>
		<div class="topnav">
		  <div class="search-container">
		    <form action="#" method="post">
		      <input type="text" placeholder="Search.." name="p_id">
		      <button type="submit" name="cacel" style="margin-left: -20px;"><i class="fa fa-search"></i></button>
		    </form>
		</div>
	</div>
	</td>
</tr>
</div> 
<tr>
	<td style="">
<div class="container">
	<?php 
$cn=mysqli_connect("localhost","root","","db_ttms");

if (isset($_POST['cacel'])) {
	$tour_id = $_POST['p_id'];

	 $query = "select * from enquiry Where Enquiryid = $tour_id";

	 $result = mysqli_query($cn,$query);
	 $row = mysqli_fetch_array($result);
	 if ($result && $row>0) {
	 	

	 $Enquiryid = $row['Enquiryid'];
	 $Packageid = $row['Packageid'];
	 $Name = $row['Name'];
	 $Gender = $row['Gender'];
	 $Mobileno = $row['Mobileno'];
	 $Email = $row['Email'];
	 $NoofDays = $row['NoofDays'];
	 $Child = $row['Child'];
	 $Adults = $row['Adults'];
	 $Message = $row['message'];
	 $Statusfield = $row['Statusfield'];
	 $enquiry_date = $row['enquiry_date'];


	 $timestamp = strtotime($enquiry_date);

// echo $date = date('d-m-Y', $timestamp);


$stop_date = $enquiry_date;
$stop_date = date('Y-m-d H:i:s', strtotime($stop_date . ' +1 day'));




	 }
	 

}
 


 if (isset($_GET['cnclid'])) {

					$cnclid= $_GET['cnclid'];

					$query = "select * from enquiry Where Enquiryid = $cnclid ";

					 $result = mysqli_query($cn,$query);
					 $row = mysqli_fetch_array($result);

					  $enquiry_date = $row['enquiry_date'];


					 $timestamp = strtotime($enquiry_date);

					 $stop_date = $enquiry_date;
				$stop_date = date('Y-m-d H:i:s', strtotime($stop_date . ' +1 day'));


					$now = date('Y-m-d H:i:s');

					

				if (!empty($stop_date) && !empty($now)) {

					if ($stop_date>$now) {

						$query = "Update enquiry set Statusfield = 'Cancel' where Enquiryid = $cnclid ";
						 $result = mysqli_query($cn,$query);

					 if ($result) {
					 	echo "<p style='color:red;padding:10px 10px;margin-left:250px;font-size:30px;margin-top:-40px;'>your tour is successfully canceled</p>"; 
					 }
				}else{
					echo "<p style='color:red;padding:10px 10px;margin-left:250px;font-size:30px;margin-top:-40px;Opps!! time over. you can't cancel you tour</p>"; 
				}
					}

				}




 ?>

		<div class="row001" >
			<table>
			  <tr>
			    <th style="padding-left: 20px;">Name</th>
			    <th>Gender</th>
			    <th>Mobileno</th>
			    <th>Email</th>
			    <th>Action</th>
			  </tr>
			  <tr>
			    <td><?php echo !empty($Name)?$Name : ""; ?></td>
			    <td><?php echo !empty($Gender)?$Gender : ""; ?></td>
			    <td><?php echo !empty($Mobileno)?$Mobileno : ""; ?></td>
			    <td><?php echo !empty($Email)?$Email : ""; ?></td>

			    <?php 
			    	if (!empty($Enquiryid)) { ?>
			    		 <td><a href="category.php?cnclid=<?php echo  $Enquiryid; ?>&amp;key3=<?php echo $val1; ?>"><button>Cancel</button></a></td>
			    		
			    	<?php }else{ ?>
						<td></td>

			    	<?php }

			     ?>

			  </tr>
			  
			</table>		
		</div>
	</div>
</td>
</tr>
 
</table>
</div>
</div>
