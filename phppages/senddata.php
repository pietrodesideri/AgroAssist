<?php

include("connection.php");


//create variables
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$pass=$_POST["pass"];

//place the elements in the array
$query="insert into user(fullname,email,phone_number,password) values('$fullname','$email','$phone','$pass')";

//process the statement

$result=mysqli_query($conn,$query);

if($result)
{
    echo json_encode("Data Saved Successfully");
}
else
{
	 echo json_encode("Failure in saving data");
}


?>

