<?php
$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'resort_management');

$sql = "DELETE FROM admin WHERE id='$_GET[aid]'";
$record = mysqli_query($link, $sql);

if($record){
	header("refresh:1; url=Admin.php");
}
else{
	echo"Not Deleted";
}

?>