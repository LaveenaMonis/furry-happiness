<?php
/*
*Database connectivity page
*/

	$connection = mysqli_connect('localhost','root','','internship_project');
		if( !$connection ){
			echo "Error in connecting";
			return false;
		}
		else{
			echo " connected";	
			$GLOBALS['connected'] = $connection;	
		}
