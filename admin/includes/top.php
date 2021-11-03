
<?php 
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_ttms'; 

$connection = mysqli_connect($hostname,$username,$password);
$db_select = mysqli_select_db ($connection,$dbname);

$sql="select * from tbl_user";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
	$row=mysqli_fetch_array($resource_id);
}else{
	die('not view'.mysqli_error($connection));
}

?>
<body>
<div id="date">
	<p><span id="datetime"></span></p>
	<script>
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleString();
	</script>
</div>
<div id="header_logo">
	<h3><a href="./general_mastar.php">my <span>tour</span></a></h3>
</div>
<div id="header_menu">
	<ul>
		<li><a href="#" id="a">Preview Website</a></li>
		<li><a href="./index.php" id="a">Log Out</a></li>
		<li>
			<a href="#bg_model" id="a"> <?php echo isset($_SESSION['username'])?$_SESSION['username'] : '';?> </a>
			<!--<input type="number" value="<?php echo $_SESSION['u_id'];?>">-->
		</li>
		<li id="myBtn" style="margin-bottom: 10px;">
			<img src=" <?php echo $_SESSION['userimg']; ?> " alt="" style="height: 60px;width: 60px;border-radius: 50%; align-items: center;cursor: pointer;">
		</li>
	</ul>
</div>
<div class="animated">
	<?php include 'animated.php'; ?>
</div>

<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button>
 -->
<!-- The Modal -->
<div id="myModal" class="modal">
 
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">+</span>
   <img src="<?php echo $_SESSION['userimg']; ?> " alt="">
		<form action="" method="post">
			<table class="profile_content">
			    <?php 
					$uid = $_SESSION['u_id'];
					$sql="select * from tbl_user where user_id=$uid";
					$query_result=mysqli_query($connection,$sql);

					$result=mysqli_fetch_array($query_result); 
				?>
 				<tr>
					<td>Name :</td>
					<td><?php echo $result['user_name']; ?> </td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><?php echo $result['user_email']; ?></td>
				</tr>
				<tr>
					<td>Phone No :</td>
					<td><?php echo $result['user_no']; ?></td>
				</tr>
				<tr>
					<td>Type :</td>
					<td><?php echo $result['user_type']; ?></td>
				</tr>
			</table>
		</form>
		<!-- <div class="footer">
			<img src="../admin_pic/fb.jpg" alt="fblogo" style="height: 10px;width: 10px;">
		</div -->
  </div>

</div>




</body>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>