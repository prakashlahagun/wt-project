<html>
<head>
	<style type="text/css">
  button{
    padding: 10px;
    margin: 60px;
    background-color: orange;
  }
  h1{
    text-align: center;
    font-family: sans-serif;
  }
  #one{
    height: 300px;
    width: 300px;
  }
  .green{
    position: absolute;
    top: 0px;
    right: 0px;
  }
  .green a{
    text-decoration: none;
  }
  .area{
    float:left;
    list-style: none;
    margin-top: 30px;
  }
  .area li{
  display: inline-block;
  }
  .area li a{
    color: black;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 16px;
    padding: 10px
  }
  .area li a:hover{
    background: lightblue;
  }
	</style>
	<title>code</title>
</head>
<body>
  <script type="text/javascript">
function light(value){
  var pic;
  if(value==0){
  pic="two.jpg";
}
else{
  pic="three.jpg";
}
document.getElementById('one').src=pic;

}
  </script>
  <h1><u>It Is A Light Page</u></h1>
  <ul type="none" class="area">
  <li><a href="colo.html">Color</a></li>
  <li><a href="order.php">Pizza</a></li>
  <li><a href="quize.html">Quiz</a></li>
  </ul>
	<img src="two.jpg" id="one"><br/>
  <button onclick="light(1)">TURN ON</button>
<button onclick="light(0)">TURN OFF</button>
<button class="green"><a href="login.php">Log out</a></button>
</body>
</html>
<?php

