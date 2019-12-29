<html>
<head>
<link rel="icon" type="image/png" href="images\chef.png">
<link rel="stylesheet" type="text/css" href="main.css">
<title>Order Placed - Restorderant</title>
</head>
<body bg="images\bg.jpg">

<div id="Navigation" style="position:fixed;float:left;width:101.5%;height:14%;background:rgba(0, 0, 0, 0.41);border: 0px Solid;margin-top:-1%;margin-left:-1%;">
<div style="width:20%;height:8%;margin-top:2%;margin-left:2%;"><a href="index.html"><img src="images\logo.png" /></a></div>
<div style="width:20%;height:8%;margin-top:-2.5%;margin-left:40%"><nav style="position: fixed;"><ul id="mainmenu">
<li id="menu"><a href="test.html" id="link"><b>Home</b></a></li>
<li id="menu"><a href="test.html" id="link"><b>Place An Order</b></a></li>
<li id="menu"><a href="test.html" id="link"><b>About Us</b></a></li>
<li id="menu"><a href="test.html" id="link"><b>Contact Us</b></a></li>
</nav></div>
</div>
<div id="overlay" style="width:101.5%;margin-left:-1%;height:120%;background:rgba(255, 255, 255, 0.41);";">
<center><img align="center" height="50%" style="margin-top:10%;margin-left:auto;" src="images\chef.png" >
<div id="text-container" style="width:100%;margin-left:auto;height:10%;"><font size="15%" face="Calibri"><center>  ?   Order Successfully Placed !</center></font><br><font size="4%" face="Calibri Light">Your order is being prepared and will be delivered by the next 30 minutes.<br><b>Price</b>
<?php 
$dishname=$_GET['dish'];
	$money=$_GET['price'];
?>
<?php echo $money ?>
</font></center>
</div>
</div><center>
<div id=footer" style="background:rgba(0, 130, 16, 0.55);width:100%;height:18%;"><font face="Segoe UI Light" size="3" color="white">
© Restorderant 2016. All Rights Reserved.<br>
Prepared By : <br>
Ishan Sharma (Xth), Harshit Budhia (XIIth)<br>
<b>Seth Hukam Chand S.D. Public Senior Secondary School</b><br>
New Prem Nagar, Jalandhar, Punjab-144001
</font></div></div>
</body>
</html>