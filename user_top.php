<div class="time_date">
	<p id="datetime"></p>
	<script>
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleString();
	</script>
</div>
<div class="logo">
	<a href="index.php"><h3>My<span>Tour</span></h3></a>
</div>
<div class="search">
	<?php include 'search.php'; ?>
</div>
<div class="header_menu">

	<ul>
		<li>
			<i class="fas fa-home"></i><a href="?key=<?php echo 1; ?>">Home</a>
		</li>
		<li>
			<i class="fas fa-image"></i><a href="?key=<?php echo 2; ?>">Galary</a>
		</li>
		<li>
			<i class="fab fa-accusoft"></i><a href="category.php?key=<?php echo 3; ?>">Tour-Category</a>
		</li>
		<li>
			<i class="fas fa-address-card"></i><a href="?key=<?php echo 4; ?>">About</a>
		</li>
		<li>
			<i class="fas fa-phone-square"></i><a href="?key=<?php echo 5; ?>">Contact</a>
		</li>
		<!-- <li>
			<i class="fas fa-phone-square"></i><a href="?key=<?php echo 6; ?>">Cancel Tour</a>
		</li> -->
	</ul>
</div>
<div class="login">
	<p><a href="#">Signup</a></p>
</div>

<script type="text/javascript">
		$(document).ready(function(){
			$("#search").keyup(function(){
				var searchText = $(this).val();
				if(searchText != ''){
					$.ajax({
						url:'action.php',
						method:'post',
						data:{query:searchText},
						success:function(response){
							$("#show-list").html(response);
						}
					});
				}else{
					$("#show-list").html('');
				}
			});
			$(document).on('click','a',function(){
				$("#search").val($(this).text());
				$("#show-list").html('');
			});
		});	
	</script>