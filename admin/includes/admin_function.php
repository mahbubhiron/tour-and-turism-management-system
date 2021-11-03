
<div id="admin_function">
	<h3><i class="fas fa-cogs fa-1.5x cust"></i>Admin Function</h3>
	<div class="menu">
		<li class="item" id="user1">
			<a href="#user1" class="btn"><i class="fas fa-user"></i>User</a>
			<div class="smenu">
				<a href="?key=<?php echo 1; ?>">Add User</a>
				<a href="?key=<?php echo 2; ?>">Update User</a>
				<a href="?key=<?php echo 3; ?>">Delete USer</a>
			</div>
		</li>
		<li class="item" id="category">
			<a href="#category" class="btn"><i class="fas fa-align-justify"></i>Category</a>
			<div class="smenu">
				<a href="?key=<?php echo 4; ?>">Add Category</a>
				<a href="?key=<?php echo 5; ?>">Update Category</a>
				<a href="?key=<?php echo 6; ?>">Delete Category</a>
				<a href="?key=<?php echo 7; ?>">View Category</a>
			</div>
		</li>
		<li class="item" id="scategory">
			<a href="#scategory" class="btn"><i class="fas fa-align-left"></i>SubCategory</a>
			<div class="smenu">
				<a href="?key=<?php echo 8; ?>">Add SubCategory</a>
				<a href="?key=<?php echo 9; ?>">Update SubCategory</a>
				<a href="?key=<?php echo 10; ?>">Delete SubCategory</a>
				<a href="?key=<?php echo 11; ?>">View SubCategory</a>
			</div>
		</li>
		<li class="item" id="Package">
			<a href="#Package" class="btn"><i class="fas fa-box-open"></i>Package</a>
			<div class="smenu">
				<a href="?key=<?php echo 12; ?>">Add Package</a>
				<a href="?key=<?php echo 13; ?>">Update Package</a>
				<a href="?key=<?php echo 14; ?>">Delete Package</a>
				<a href="?key=<?php echo 15; ?>">View Package</a>
			</div>
		</li>
		<li class="item" id="Advertisement">
			<a href="#Advertisement" class="btn"><i class="fas fa-ad"></i>Advertisement</a>
			<div class="smenu">
				<a href="?key=<?php echo 16; ?>">Add Advertisement</a>
				<a href="?key=<?php echo 20; ?>">Update Advertisement</a>
				<a href="?key=<?php echo 17; ?>">Delete Advertisement</a>
				<a href="?key=<?php echo 18; ?>">View Advertisement</a>
			</div>
		</li>
		<li class="item" id="Enquiry">

			<?php 
			$cn=mysqli_connect("localhost","root","","db_ttms");
			$query = "select * from enquiry where Statusfield = 'Pending' ";
			$result = mysqli_query($cn,$query);
			if ($result) {
			  $num = mysqli_num_rows($result);
			}

			$query1 = "select * from enquiry where Statusfield = 'Cancel' ";
			$result1 = mysqli_query($cn,$query1);
			if ($result1) {
			  $num1 = mysqli_num_rows($result1);
			}

			 ?>

				<a href="#Enquiry" class="btn" class="notification"><i class="fas fa-adjust" ></i>
				<span>Enquiry</span>
      			<span class="badge" style="position: absolute;
									  top: 0px;
									  padding: 5px 5px;
									  border-radius: 50%;
									  background-color: green;
									  font-family: bold;
									  font-weight: 900;
									 /* height: 10px;*/
									  color: white;"><?php echo $num+$num1; ?></span>
			</a>
			<div class="smenu">
				<a href="?key=<?php echo 19; ?>" class="notification">
					<span>Confirm Tour</span>
      				<span class="badge"><?php echo $num; ?></span>
				</a>
				<a href="?key=<?php echo 21; ?>" class="notification">
					<span>Cancel Tour</span>
      				<span class="badge"><?php echo $num1; ?></span>
				</a>
			</div>
		</li>
		<li class="item" id="Contact">
			<?php 

			$cn=mysqli_connect("localhost","root","","db_ttms");
			$query = "select * from tbl_contact ";
			$result = mysqli_query($cn,$query);
			if ($result) {
			  $num = mysqli_num_rows($result);
			}

			 ?>
			<a href="#Contact" class="btn"><i class="fas fa-ad"></i>
				<span>Contact</span>
      			<span class="badge" style="position: absolute;
									  top: 0px;
									  padding: 5px 5px;
									  border-radius: 50%;
									  background-color: green;
									  font-family: bold;
									  font-weight: 900;
									 /* height: 10px;*/
									  color: white;"><?php echo $num; ?></span>
			</a>
			<div class="smenu">
				<a href="?key=<?php echo 22; ?>" class="notification">
					<span>View Contact</span>
      				<span class="badge"><?php echo $num; ?></span>
				</a>
			</div>
		</li>
	</div>
</div>
