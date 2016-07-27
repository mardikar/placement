<?php
include("config.php");
$db_handle = new ConfigController();

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$branch = $_POST["branch"];
$company = $_POST["company"];
$criteria = $_POST["criteria"];
$package = $_POST["package"];
$pointer = $_POST["pointer"];
$aptitude = $_POST["aptitude"];
$technical = $_POST["technical"];
$hr = $_POST["hr"];
$other = $_POST["other"];

$query = "INSERT INTO `experience` VALUES (null,'".$name."','".$email."','".$phone."','".$branch."','".$company."',".$criteria.",".$package.",".$pointer.",'".$aptitude."','".$technical."','".$hr."','".$other."',null)";
if(mysql_query($query)){
	echo '<script type="text/javascript">alert("Posted");window.location.href="contact.php";</script>';
}
else{
	echo '<script type="text/javascript">alert("Oops!");window.location.href="contact.php";</script>';
}
?>