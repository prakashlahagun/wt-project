<html>
<head>
	<title>code</title>
</head>
<body>
	<script type="text/javascript">
    function validation(){
    	if(document.getElementById('one').value==""){
      alert('Please Enter Your Username and Password');
    	}
    	else if(document.getElementById('two').value==""){
      alert('Please Enter You Password');
    	}

    	else {
    		alert('Good');
    	}
    }


	</script>
	<form method="post" action="process.php">
<input type="text" placeholder="Username" name="username" id="one" class="runon"><br/><br/>
<input type="password" placeholder="Password" name="password" id="two" class="runon"><br/><br/>
</from>
<button type="submit" name="sup" id="radhe" onclick="validation()">Log in</button>
<a href="register.php">Sign in</a>
</from>
</body>
</html>
