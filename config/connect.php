<?php
$conn = mysqli_connect('localhost', 'root', '', 'dataflapshop');
if($conn){
	mysqli_query($conn, "SET NAMES 'utf8'");
}
else{
	die("Không thể kết nối tới MySQL Server !");
}
?>