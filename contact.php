<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body style="background: url('bg2.jpg');background-size: cover;overflow-y: hidden;">
    
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
        <section class="redarea">
            <center>
            <font face="Segoe UI Light" color="white" size="6">
                Zomato Care
                </font><br>
                <font face="Segoe UI Light" color="white" size="3">
                    Any query? Contact our friendly 24x7 customer support
                </font>    
            </center>
        </section>
    <div class="contactsec">
        <div class="contactleft">    
        <center>
            <form action="contact.php" method="get">
                
                <input name="Name" class="textf" type="textbox" placeholder="Full Name" required/><br>
                <input name="EmailID" class="textf" type="email" 
                 placeholder="Email Address" required/><br>
                <input name="TelNo" class="textf" type="tel" 
                 placeholder="Phone Number" required/><br>
                <input name="stat" value="1" hidden />
                <input name="msg" class="textf" type="textarea" id="msg"  placeholder="Message"
                    required/><br>
                <input class="submitbtn" type="submit" value="Send Message"/><br><br>
                <font color="white" face="Segoe UI Light"><?php 
                                    
                                        $a=0;
                                    if(isset($_GET['stat'])){
                                        $a=$_GET['stat']; 
                                    }
                                    if ($a=1){
                                        echo "Your message has been succesfully sent.";
                                    
                                    } ?></font>
                </form>
                
                
        </center>
        </div> 
        <div class="contactright">
            <font face="Segoe UI Light">
                <h1>Want To Reach Us Instead?</h1>
                Call us at <b>+91 011 30806376</b><br>Email Us at <b>contact@zomato.in</b><br>
                <br>Or <b>visit your Nearest Zomato Office</b>
                <br><p align="justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
            </font>            
        </div>
        </div>
   
    </body>
</html>