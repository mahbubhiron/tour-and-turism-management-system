<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include 'includes/top.php'; ?>
<?php include('../database/db_connect.php'); ?>
<?php

	$s="update enquiry set statusfield='Confirm' where enquiryid='" . $_GET["eid"] . "'";
	mysqli_query($connection,$s);
	mysqli_close($connection);
header("Location: confirm_tour.php");
?>
</body>
</html>