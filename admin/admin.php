<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị - Store</title>
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href="css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>
	<link rel="stylesheet" href="Awesome/css/all.css">
</head>
<body>
<?php
	include('header.php');
	include('sidebar.php');
	if (isset($_GET['page_layout'])) {
		switch ($_GET['page_layout']) {
			case 'listproduct': include_once('listproduct.php'); break;
			case 'category': include_once('category.php'); break;
			case 'listuser': include_once('listuser.php'); break;
			case 'addproduct': include_once('addproduct.php'); break;
		}
	}else {
		include_once('main.php');
	}
?>
	<!-- javascript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>

</body>

</html>