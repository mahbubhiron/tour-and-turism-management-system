<?php 
$conn= new mysqli("localhost","root","","db_ttms");
if($conn->connect_error){
	die('faild to connect'.$conn->connect_error);
}
if(isset($_POST['query'])){
	$inpText=$_POST['query'];
	$query="select package_name from tbl_package where package_name like '%$inpText%' ";
	$result= $conn->query($query);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo "<a href='#' style='z-index: 10;color: white;background-color: #56C1E0;text-decoration: none;'>".$row['package_name']."</a>";
		}
	}else{
		echo "	<p class='list-group-item border-1' > No Record</p> ";
	}
}

 ?>