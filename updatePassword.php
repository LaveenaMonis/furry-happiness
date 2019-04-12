<?php
print_r($_POST);
if(isset($_POST['change_password'])){
global $connected; 
print_r( $connected);
$sql = 'SELECT `email` FROM `user`';
	$result = mysqli_query($connected, $sql);
	$flag = 0;
	if ( mysqli_num_rows($result) > 0 ) {
		while( $row = mysqli_fetch_assoc($result) ) {
   			if( $row['email'] === $_POST['userName']  )
			{
				
					$flag = 1;
					echo "user found";
					break;
			}

			}
		}
	
	$password=md5($_POST['password']);
if($flag == 1){
	//$update_sql = "UPDATE `user` SET `password`=".$_POST['password']." WHERE `email`=".$_POST['userName'];
	
	$update_sql="UPDATE `user` SET `password`='".$password."' WHERE `email`='".$_POST['userName']."'";

	echo $update_sql;
		$result = mysqli_query($connected, $update_sql);
		if($result)
			header('Location:index.php?auth=success&type=changedPassword');
	
		else
			echo "Not updated";	
}
else
{
	//header('Location:index.php?auth=failed&type=user_not_exists');
		echo "user not found";
}
}
