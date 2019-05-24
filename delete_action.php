<?php
include_once("db_connect.php");
if(isset($_POST['emp_id'])) {
	$emp_id = trim($_POST['emp_id']);	
	$sql = "DELETE FROM job WHERE order_id in ($emp_id)"
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	echo $emp_id;
}
?>