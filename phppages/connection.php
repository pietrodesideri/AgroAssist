<?php
	//create the connection variables
	$server="localhost";
	$db_user="root";
	$db_password="";
	$db="agroassistdb";

	//create connection

	$conn=mysqli_connect($server,$db_user,$db_password,$db);

	if($conn)
	{
		//echo "Connection Successful";
	}
	else
	{
		echo "Connection failed due to ".mysqli_connect_error();
	}

    
?>



