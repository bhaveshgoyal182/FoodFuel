<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body style="overflow-y: hidden;">
    
        <nav>
            <font face="Segoe UI Light">
               <a href="index.html"> <img src="logo.png" id="logo"></a>
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
                Your Order Has Been Succesfully Placed
                </font><br>
                <font face="Segoe UI Light" color="white" size="3">
                    Our chefs are preparing your order.
                </font>    
            </center>
        </section>
    <section class="orderdetails">
        <div style="height:auto;padding-bottom:5vh;" id="orderform">
            
            <h1 id="orderlabel2">Hello  <?php 
                echo $_GET['name'];
                ?>,
            </h1>
            <center>
                We will soon be delivering your order at :<br><b><?php echo $_GET['msg']; ?></b>
            <br><br>You will recieve your Order Summary at:<br><b>
                <?php
                echo $_GET['EmailID'];
                    ?>
                </b><br><br>
                <b>Thank you for choosing FoodFuel.</b>
            </center>
            
        </div>
    </section>
</body>
</html>