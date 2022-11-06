<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}
else{
	echo "No connection";
}

mysqli_select_db($con, 'userdata');

$user - $_POST['user']; 
$email - $_POST['email']; 
$mobile - $_POST['mobile']; 
$comments - $_POST['comments']; 

$query = " INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comments') ";

echo "$query";
mysqli_query($con, $query);

header('location:index.php');

?>