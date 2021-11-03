<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			if (isset($_GET['key'])) {

				$val = $_GET['key'];
				if ($val==1) {
					echo "--Add User--";
				}
				else if($val==2){
					echo "--Update User--";
				}
				else if($val==3){
					echo "--Delete User--";
				}
				else if($val==4){
					echo "--Add Category--";
				}
				else if($val==5){
					echo "--Update Category--";
				}
				else if($val==6){
					echo "--Delete Category--";
				}
				else if($val==7){
					echo "--View Category--";
				}
				else if($val==8){
					echo "--Add SubCategory--";
				}
				else if($val==9){
					echo "--Update SubCategory--";
				}
				else if($val==10){
					echo "--Delete SubCategory--";
				}
				else if($val==11){
					echo "--View SubCategory--";
				}
				else if($val==12){
					echo "--Add Package--";
				}else if($val==13){
					echo "--Update Package--";
				}else if($val==14){
					echo "--Delete Package--";
				}else if($val==15){
					echo "--View Package--";
				}else if($val==16){
					echo "--Add Advertisement--";
				}else if($val==17){
					echo "--Delete Advertisement--";
				}
				else if($val==18){
					echo "--View Advertisemnet--";
				}else if($val==19){
					echo "--Confirm Tour--";
				}
				else if($val==20){
					echo "--Update Advertisemnet--";;
				}else if($val==21){
					echo "--Cancel Tour--";;
				}else if($val==22){
					echo "--View Contact--";;
				}

			}else{
				echo "--My Tour--";
			}

			 ?>
	</title>
	<link rel="stylesheet" href="admin_css/admin_mastar.css">
	<link href='https://fonts.googleapis.com/css?family=Beth Ellen' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Faster One' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/6f84ddc6a9.js" crossorigin="anonymous"></script>
</head>
<body>


	<div id="main">

		<div id="header">
			<?php include 'includes/top.php'; ?>
		</div>
		

		<div id="container">

			<div id="function">
				<?php include 'includes/admin_function.php'; ?>	
			</div>

			<div id="user">

			<?php 
			if (isset($_GET['key'])) {

				$val = $_GET['key'];


				$_SESSION['val'] = $val;


				if (isset($_GET['eid'])) {
				  $del_ids=$_GET['eid'];
				$s="update enquiry set Statusfield='Confirm' where Enquiryid= $del_ids ";
				mysqli_query($connection,$s);
				}

				if ($val==1) {
				include 'add_user.php';
				}
				else if($val==2){
					include 'update_user.php';
				}
				else if($val==3){
					include 'delete_user.php';
				}
				else if($val==4){
					include 'add_category.php';
				}
				else if($val==5){
					include 'update_category.php';
				}
				else if($val==6){
					include 'delete_category.php';
				}
				else if($val==7){
					include 'view_category.php';
				}
				else if($val==8){
					include 'add_subcategory.php';
				}
				else if($val==9){
					include 'update_subcategory.php';
				}
				else if($val==10){
					include 'delete_subcategory.php';
				}
				else if($val==11){
					include 'view_subcategory.php';
				}
				else if($val==12){
					include 'add_package.php';
				}else if($val==13){
					include 'update_package.php';
				}else if($val==14){
					include 'delete_package.php';
				}else if($val==15){
					include 'view_package.php';
				}else if($val==16){
					include 'add_advertisement.php';
				}else if($val==17){
					include 'delete_advertisement.php';
				}
				else if($val==18){
					include 'view_advertisement.php';
				}else if($val==19){
					
					include 'confirm_tour.php';
				}
				else if($val==20){
					include 'update_advertisement.php';
				}else if($val==21){
					include 'cancel_tour.php';
				}else if($val==22){
					include 'view_contact.php';
				}

			}

			 ?>

		</div>
		
		</div>

		<div id="footer">
			<?php include 'includes/bottom.php'; ?>
		</div>	

	</div>
</body>
</html>