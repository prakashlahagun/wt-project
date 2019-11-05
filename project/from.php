<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection sucessfull";
}
else{
	echo"connection is not possible";
}
mysqli_select_db($con,'loginfrom');
$user=$_POST['username'];
$pass=$_POST['pass'];
$q="insert into logiin(username,password) values('$user','$pass')";
mysqli_query($con,$q);
header('location:page.php');

?>