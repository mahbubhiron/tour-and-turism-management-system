<?php 
session_start();

if(isset($_POST['btn'])){

	function insert_info($data){
		require '../database/db_connect.php';
		$sql = "select * from tbl_user where user_name='$data[user_name] ' and user_pass='$data[pass]' ";
		$query_result = mysqli_query($connection,$sql);
		if($query_result){
			while($row=mysqli_fetch_assoc($query_result)){
				$tbl_user_name = $row['user_name'];
				$tbl_user_pass = $row['user_pass'];
				$tbl_user_type = $row['user_type'];
				$tbl_user_img = $row['user_img'];
				$_SESSION['u_id'] = $row['user_id'];
				if(!empty($tbl_user_name) && !empty($tbl_user_pass) && !empty($tbl_user_type=='admin')){
					 $_SESSION['userimg']=$tbl_user_img;
					 $_SESSION['username']=$tbl_user_name;
					header('Location: admin_mastar.php');
				}else if(!empty($tbl_user_name) && !empty($tbl_user_pass) && !empty($tbl_user_type=='genarel')){
					 $_SESSION['userimg']=$tbl_user_img;
					 $_SESSION['username']=$tbl_user_name;
					header('Location: general_mastar.php');
				}
				else{
					die('error'.mysqli_error($connection));
				}
			}
		}else{
			die('something wrong'.mysqli_error($connection));
		}
	}
	insert_info($_POST);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="admin_css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Beth Ellen' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/6f84ddc6a9.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="main">
		<div id="header">
			<h3>my <span>tour</span></h3>
		</div>
		<div id="main_div">
		
		<div id="from_div">
			<div id="from_header">
				<h3>Admin Login</h3>
			</div>
			<div id="container">
				<div id="login_logo">
				<img src="admin_pic/gggh.jpg" alt="login_logo">
				</div>
				<form action="" method="post">
				<fieldset>
					<div id="from_input_box">
							<div class="name_input">
								<i class="far fa-user fa-1.5x cust1" aria-hidden='true' ></i>
								<input type="text" name="user_name" value="" placeholder="Enter user name"><br/>
							</div>
							<div class="pass_input">
								<i class="fas fa-user-lock fa-1.5x cust " aria-hidden='true'></i>
								<input type="password" name="pass" value="" placeholder="Enter user password"><br/>
							</div>
						<div class="remember">
							<label for="remember"><input type="checkbox" id="remember_me">Remember_me</label>
						</div>
						<div class="submit_input">
							<input type="submit" name="btn" value="LOGIN !">
						</div>
					</div>
				</fieldset>
				</form>
			</div>
			<div id="from_botom">
				<p>Forgot password ?</p>
			</div>		
		</div>
		
	</div>
	</div>
	
</body>
</html>