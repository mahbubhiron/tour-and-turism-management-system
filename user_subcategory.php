<?php 

require 'database/db_connect.php';


 ?>
<div class="subcategory_container">
	<div class="subcategory_content">
		<h3>SubCategory</h3>
	</div>
	<div class="row">
		<?php 

		$s="select * from tbl_subcategory where category_name='" .$_GET["ca_id"] . "'";
		$result=mysqli_query($connection,$s);
		$r=mysqli_num_rows($result);
		while($data=mysqli_fetch_array($result))
		{
		 ?>
		  <div class="column">
		  	<p><?php echo $data['subcategory_name']; ?></p>
		    <img src="admin/<?php echo $data['subcategory_image']; ?>" alt="Snow" style="height: 250px;height: 250px;">
		    <p><a href="?subc_id=<?php echo $data[0]; ?>">view Details</a></p>
		  </div>
		<?php } ?>
		<!-- <?php 
		if (isset($_GET['subc_id'])) {
			// echo "<pre/>";
			// print_r($_GET);

				$val = $_GET['subc_id'];
				if (!empty($val)) {
				include 'user_package.php';
				}
			}
		 ?>
 -->	</div>
</div>