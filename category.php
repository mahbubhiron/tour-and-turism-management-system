
<?php 

require 'database/db_connect.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>--Tour_category---</title>
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
		}		?>

	<div class="category_container">
		<div class="category_function">
			<h3>Category</h3>
			<ul>
				<?php

				$s="select * from tbl_category";
				$result=mysqli_query($connection,$s);
				$r=mysqli_num_rows($result);
				//echo $r;

				while($data=mysqli_fetch_array($result))
				{
					?>
				<li><a href="?ca_id=<?php echo $data[0] ?>"><?php echo $data[1]; ?></a></li>
			<?php } ?>
			</ul>
		</div>
		<!-- <?php include 'category_description.php'; ?>  -->
		 <?php 
		if (isset($_GET['ca_id'])) {

				$val = $_GET['ca_id'];
				if (!empty($val)) {
				include 'user_subcategory.php';
				} 
			}
			if(isset($_GET['subc_id'])){
					$val1= $_GET['subc_id'];
					if(!empty($val1)){
						include 'user_package.php';
					}
				}
				if(isset($_GET['p_id'])){
					$val1= $_GET['p_id'];
					if(!empty($val1)){
						include 'user_view_package.php';
					}
				}
			 if(isset($_GET['pid'])){
					$val1= $_GET['pid'];
					if(!empty($val1)){
						include 'user_enquiry.php';
					}
				}
				// if(isset($_GET['key'])){
				// 	$val1= $_GET['key'];
				// 	if(!empty($val1)){
				// 		include 'cancel_tour.php';
				// 	}
				// }
			if(isset($_GET['key3'])){
					$val1= $_GET['key3'];
					
					$_SESSION['val'] = $val1;

					if($val1==17){
						include 'cancel_tour.php';
					}
				}
				if (isset($_GET['key'])) {

			$val = $_GET['key'];
			if($val==3){
					include 'category_description.php';
				}
		}
				
		 ?>
</div>
<?php include 'about.php';
			include 'user_contact.php'; ?>
<div class="foter">
		<?php include 'bottom.php'; ?>
</div>



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

	