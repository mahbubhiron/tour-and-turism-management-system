<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="auther" content="Shil Kumar">
	<meta http-equiv="X-UA_Compatible" content="IE=etge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title>--Search--</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
	.s{
		position: relative;
		width: 240px;
		height: 30px;
		margin-left: -30px;
		margin-right: 10px;
		z-index: 2;
		top: 0;
		left: 160px;
	}
	.s form input[type="text"]{
		position: absolute;
		top: 0;
		left: 0;
		width: 190px;
		height: 30px;
		padding: 10px;
	}
	.s form input[type="submit"]{
		position: absolute;
		top: 0;
		left: 190px;
		width: 60px;
		height: 30px;
		font-size: 15px;
	}
</style>
</head>
<body class="">
	<div class="container">
		<div class="row">
			<div class="s">
				<form action="show_search.php" method="post"  enctype="multipart/form-data">
					<input type="text" name="search" id="search" class="" placeholder="Search by place..." >
					<input type="submit" name="submit" value="search" class="" >
				</form>
			</div>
			<div class="">
				<div class="list-group" id="show-list" style="margin-top: 35px;margin-left: -90px;z-index: 10;display: inline-flex;">
					
				</div>
			</div>
		</div>
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
