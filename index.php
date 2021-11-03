<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>--Home--</title>
	<link rel="stylesheet" href="assets/user_css/user_css.css">
	<link href='https://fonts.googleapis.com/css?family=Beth Ellen' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/6f84ddc6a9.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="top_header">
		<?php include 'user_top.php'; ?>
	</div>
	
	<div class="add_slider">
		<?php 

		require 'database/db_connect.php';

		$sql="select * from tbl_advertiesment,tbl_package where tbl_advertiesment.package=tbl_package.package_id and tbl_advertiesment.a_id='1'";
		$r=mysqli_query($connection,$sql);
		if($r){
			$result=mysqli_fetch_assoc($r);

		}else {
			die('error'.mysqli_error($connection));
		}

		 ?>
		<div class="add_content">
			<p><span style="color: red;font-size: 40px;font-weight: 700;font-family: bold;margin-top: -20px;text-align: center;"><?php echo $result['offer']; ?></span> in <?php echo $result['package_name']; ?></p>
		</div>
	</div>

	<!-- header close -->

	
		<?php 
		if (isset($_GET['key'])) {

			$val = $_GET['key'];
			if ($val==1) {
				include 'home.php';
				include 'user_galary.php';
				include 'about.php';
				include 'user_contact.php';
			}else if ($val==2) {
				include 'user_galary.php';
				include 'about.php';
				include 'user_contact.php';
			}else if ($val==4) {
				include 'about.php';
				include 'user_contact.php';
			}else if ($val==5) {
				include 'user_contact.php';
			}
			// else if ($val==6) {
			// 	include 'cancel_tour.php';
			// }
		}else{
			include 'home.php';
			include 'user_galary.php';
			// include 'category.php';
			include 'about.php';
			include 'user_contact.php';
		}
		?>

	<div class="foter">
		<?php include 'bottom.php'; ?>
	</div>
	<!-- bottom container close -->
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<script>
	function onClick(element) {
		document.getElementById("img01").src = element.src;
		document.getElementById("myModal").style.display = "block";
	}
</script>

</body>
</html>