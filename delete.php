<?php
$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'resort_management');

$sql = "DELETE FROM customer WHERE id='$_GET[id]'";
$record = mysqli_query($link, $sql);

if($record){
	header("refresh:1; url=Admin.php");
}
else{
	echo"Not Deleted";
}

?>