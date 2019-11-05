<html>
<head>
	<title>order</title>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background: url(six.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}
	#six{
    position: absolute;
    bottom: 20px;
    left: 30px;
    background: #ff5732;
  	border-color:transparent;
  	color: #fff;
  	font-size: 20px;
  	font-weight: bold;
  	letter-spacing: 2px;
  	height: 50px;
  	margin-top: 20px;   
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
  a{
    text-decoration: none;
  }
	</style>
</head>
<body>
  <form action="save.php" method="post" >
     <input type="text" name="name" placeholder="Enter Your Name" id="kali" required><br/><br/>
    <input type="text" name="address" placeholder="Enter Your Address" id="kali" required><br/><br/>
     <input type="text" name="price" placeholder="Enter The Price" id="kali" required>
	<input type="submit" name="pizza" value="ORDER" id="six">

  </from>
</body>
</html>