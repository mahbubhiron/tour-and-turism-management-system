<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/user_css/user_css.css">
	<style>
		.search_resilt{
			position: relative;
			top: 0;
			left: 0;
			background-color: red;
			width: 100%;
		}
		.search_resilt a{
			display: block;
			padding: 2px 5px;
		}
	</style>
</head>
<body>
	<div class="header_menu">
		<ul>
			<li>
				<form action="" method="post">
					<input type="text" name="search" id="search" placeholder="Search by name">
					<button><i class="fas fa-search-plus"></i></button>
				</form>
				<div class="search_resilt" id="show-list">
					<!-- <a href="#">Link 1</a> -->
				</div>
			</li>
		</ul>
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
</body>
</html>