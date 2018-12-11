<?php
if(isset($_POST["btn-signup"])){
$hostname='localhost';
$username='root';
$password='';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=agroassistdb",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

 
$sql = "INSERT INTO user (fullname,email,phone_number,password)
VALUES ('".$_POST["fullname"]."','".$_POST["email"]."','".$_POST["phone"]."','".md5($_POST["pass"])."')";


if ($dbh->query($sql)) {
     //echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
	$response="New Record Inserted Successfully";
	echo json_encode($response);

} 
else{
     echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

}
?>