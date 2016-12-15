<?php 
	$task_id = strip_tags( $_POST['task_id'] );

	require("connect.php");

	mysqli_query($conn,"DELETE FROM `to-do` WHERE id='$task_id'");
?>