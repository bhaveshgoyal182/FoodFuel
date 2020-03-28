<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    
        <nav>
            <font face="Segoe UI Light">
               <a href="index.html"> <img src="logo.png" id="logo"></a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            </font>
        </nav>
    <section class="sec1">
        <font face="Segoe UI Light" color="white"><h1>
            <?php echo $_POST["Name"]; ?><br>
Your email address is: <?php echo $_POST["EmailID"]; ?>
            </h1>
        </font>
        </section>
    </body>
</html>