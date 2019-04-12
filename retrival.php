<?php
if( isset($_POST['sign-up'])){
	global $connected;
	$sql = 'SELECT * FROM `user`';
	$result = mysqli_query($connected, $sql);
	$flag = 0;
	if ( mysqli_num_rows($result) > 0 ) {
		while( $row = mysqli_fetch_assoc($result) ) {
   			if(  $row['email'] === $_POST['userName']  )
			
				if( $row['password'] === md5($_POST['userPassword']) ){
					$flag = 1;
					break;
			}
		}
	}

	if( $flag == 0 ) {
		header('Location:index.php?auth=failed&type=user_not_exists');
	} else {
		session_start();
		$_SESSION['userName'] = $_POST['userName'];
		header('Location:dashboard.php');
	}
}
