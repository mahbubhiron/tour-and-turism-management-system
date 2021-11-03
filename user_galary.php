<!-- Open model content start -->

<div id="myModal" class="modal" onclick="this.style.display='none'">
<span class="close">&times;</span>
<img class="modal-content" id="img01" >
<div id="caption">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat deleniti facere adipisci ipsam. Maxime alias reprehenderit consectetur eum suscipit veniam fuga. Ipsum, officiis reprehenderit aspernatur excepturi esse voluptatem, tempora sequi quam magni inventore nulla? Iusto laborum dolor vero necessitatibus dignissimos.</p>
<a href="#"><button>Confirm Tour</button></a>
</div>
</div>

<!-- open model content close -->

<div class="blank"></div>
<div class="galary_container">
<div class="galary_header">
	<h2><ins>Image Galary</ins></h2>
</div>
<div class="galary_left_add">
	<?php 

	require 'database/db_connect.php';

	$sql="select * from tbl_advertiesment";
	$r=mysqli_query($connection,$sql);
	if($r){
		$result=mysqli_fetch_assoc($r);

	}else {
		die('error'.mysqli_error($connection));
	}


	 ?>
	<div class="ad_image1">
		<img src="admin/image/subcategory_image/1.jpg" alt="" style="width: 100%; height: 290px;">
		<div class="phover1">
			<p class="hoverp"><?php echo $result['a_details']; ?></p>
		</div>
	</div>
	<div class="ad_image2">
		<img src="admin/image/subcategory_image/3.jpg" alt="" style="width: 100%; height: 290px;">
		<div class="phover2">
			<p class="hoverp"><?php echo $result['a_details']; ?></p>
		</div>
	</div>
	<div class="ad_image3">
		<img src="admin/image/subcategory_image/hqdefault.jpg" alt="" style="width: 100%; height: 290px;">
		<div class="phover3">
			<p class="hoverp"><?php echo $result['a_details']; ?></p>
		</div>
	</div>
</div>
<div class="main_galary">
	<div class="inside_m_g">
		<div class="w3-row-padding">
		    <img src="admin/image/package/1.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/2.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/3.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/4.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/42809766054_89643fde67_b.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/53048576_596870617406376_2470958650336739328_n.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/7.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/balikhola-kishoreganj-770x420.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		    <img src="admin/image/package/gettyimages-139201751-2048x2048.jpg" style="cursor:pointer" 
		    onclick="onClick(this)" class="w3-hover-opacity">
		</div>
	</div>
</div>
<div class="galary_right_add">
	<div class="ad_image1">
		<img src="admin/image/subcategory_image/1.jpg" alt="" style="width: 100%; height: 290px;">
		<div class="phover1">
			<p class="hoverp"><?php echo $result['a_details']; ?></p>
		</div>
	</div>
	<div class="ad_image2">
		<img src="admin/image/subcategory_image/3.jpg" alt="" style="width: 100%; height: 290px;">
		<div class="phover2">
			<p class="hoverp"><?php echo $result['a_details']; ?></p>
		</div>
	</div>
	<div class="ad_image3">
		<img src="admin/image/subcategory_image/hqdefault.jpg" alt="" style="width: 100%; height: 290px;">
		<div class="phover3">
			<p class="hoverp"><?php echo $result['a_details']; ?></p>
		</div>
	</div>
</div>
</div>