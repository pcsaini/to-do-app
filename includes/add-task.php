<?php 
	$task = strip_tags( $_POST['task'] );
	$date = date('Y-m-d');
	$time = date('H:i:s');

	require("connect.php");

	mysqli_query($conn,"INSERT INTO `to-do` VALUES ('', '$task', '$date', '$time')");

	$query = mysqli_query($conn,"SELECT * FROM `to-do` WHERE task='$task' and date='$date' and time='$time'");

	while( $row = mysqli_fetch_assoc($query) ){
		$task_id = $row['id'];
		$task_name = $row['task'];
	}


	echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="close.svg" /></li>';
?>