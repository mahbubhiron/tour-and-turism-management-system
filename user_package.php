
<?php 

require 'database/db_connect.php';

 ?>

<div class="subcategory_container">
	<div class="subcategory_content">
		<h3>Package</h3>
	</div>
	<div class="row">
		<?php 

		$s="select * from tbl_package where subcategory='" .$_GET["subc_id"] . "'";
		$result=mysqli_query($connection,$s);
		$r=mysqli_num_rows($result);
		while($data=mysqli_fetch_array($result))
		{
		 ?>
		  <div class="column">
		  	<p><?php echo $data[1]; ?></p>
		    <img src="admin/<?php echo $data[5] ?> " alt="Snow">
		    <p><a href="?p_id=<?php echo $data[0]; ?>">View Package</a></p>
		  </div>
		  <?php } ?>
	</div>
</div>