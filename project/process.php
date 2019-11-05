<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"loginfrom");
if(isset($_REQUEST['sup'])){
   $u=$_REQUEST['username'];
$p=$_REQUEST['password'];
$query=mysqli_query($conn,"select * from logiin where username='$u' && password='$p' ");
$row=mysqli_num_rows($query);
if($row==true){
    echo"your username and password is correct";
    header('location:page.php');
}
else{
  echo"password and username is invalid";
  header('location:login.php');
}
}

?>