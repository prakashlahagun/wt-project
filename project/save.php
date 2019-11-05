<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'pizza');
$name=$_POST['name'];
$add=$_POST['address'];
$price=$_POST['price'];
$ql="insert into person(Name,Address,Price) values('$name','$add','$price')";
mysqli_query($con,$ql);
echo "You have sucessfully order your pizza,wait 30 minutes";
?>
<html>
<head>
	<title>order</title>
	<style type="text/css">
      #save{
      	background-size: cover;
      	background-position: center;
      }
    #four{
	position: absolute;
    bottom: 20px;
    right: 30px;
    background: #ff5732;
  	border-color:transparent;
  	color: #fff;
  	font-size: 20px;
  	font-weight: bold;
  	letter-spacing: 2px;
  	height: 50px;
  	margin-top: 20px;   
	}
	</style>
</head>
<body>
<input id="four" onclick="window.location.href='keep.html'" type="submit" value="Cancel"></input>
<img src="save.jpg" id="save">

</body>
</html>