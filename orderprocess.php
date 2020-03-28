<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body style="overflow-y: hidden;">
    
        <nav>
            <font face="Segoe UI Light">
             <a href="index.html"> <img src="assets/img/logo.png" id="logo"></a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            </font>
        </nav>
    <section class="redarea" style="background:rgb(197,57,43);">
            <center>
            <font face="Segoe UI Light" color="white" size="6">
                Place Your Order
                </font><br>
                <font face="Segoe UI Light" color="white" size="3">
                    Quickly fill up the details & our chefs will start preparing your order.
                </font>    
            </center>
        </section>
    <section class="orderdetails">
        <div id="orderform">
            <h1 id="orderlabel">Order Details</h1><center>
                You are placing an order for <b>
            <?php 
                echo $_GET['name'];
                ?></b> for an amount of 
            <b>
            <?php 
                echo $_GET['price'];
                ?></b>
            </center>
            <center>
            <form method="get" action="orderconfirm.php">                
                <input name="name" class="textf2" type="textbox" placeholder="Full Name" required/><br>
                <input name="EmailID" class="textf2" type="email" 
                 placeholder="Email Address" required/><br>
                <input name="TelNo" class="textf2" type="tel" 
                 placeholder="Phone Number" required/><br>
                <input name="msg" class="textf2" type="textarea" id="msg"  placeholder="Address"
                    required/><br>
                <input class="submitbtn2" type="submit" value="Place My Order"/>
                
            </form>
            </center>
            
        </div>
    </section>
</body>
</html>