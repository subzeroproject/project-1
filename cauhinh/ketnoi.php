<?php
$connect = mysqli_connect('localhost','root','','vietproshop');
if($connect){
	$setLang=mysqli_query($connect,'SET NAME "utf8" ');
}
else{
	die("Kết nối thất bại!".mysqli_connect_error());
}

?>