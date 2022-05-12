<?php
    session_start();
    if(isset($_SESSION["name"]))
        { 
?>

<html>
    <head>
        <title> Contact Us </title>
        <link rel="icon" href="images/icon1.jpg">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            body{
                color: #000000;
            }
            #contain{
                /*border: 1px solid;*/
                width: 400px;
            }
            #heading{
                text-align: center;
                font-size: 40px;
                font-family: "verdana";
                font-style: italic;
                text-decoration: underline;
            }
            #name{
                margin-top: 40px;
                text-align: left;
            }
            #mobnum{
                margin-top: 20px;
                text-align: left;
            }
            #email{
                margin-top: 20px;
                text-align: left;
            }
            #message{
                margin-top: 20px;
                text-align: left;
            }
            #submit{
                margin-top: 40px;
                text-align: center;
                font-weight: bold;
            }
            #footer{
                text-align: left;
                position: fixed;
                bottom: 10px;
            }
        
        </style>
        
    </head>
    
    <body>
        
        <!-- Navbar -->
        
            <nav class="navbar navbar-inverse" >
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                  <a class="navbar-brand" href="#">BusPass</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li><a href="main.php">Home</a></li>
                    <li><a href="newpass.php">New Pass</a></li>
                    <li><a href="renewpass.php">Renew Pass</a></li>
                    <li><a href="payment.php">Payment</a></li>
                    <li class="active"><a href="contactnew.php">Contact Us</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="passpage.php"><span class="glyphicon glyphicon-print"></span> MyPass</a></li>
                    <li><a href="userprofile.php"><span class="glyphicon glyphicon-user"></span>
                        <?php echo $_SESSION["name"]; ?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        
        <!--Navbar End-->
        
        <div class="container-fluid" id="contain">
            <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="heading">

                            Contact Us

                    </div>
            </div>
            <form method="post" action="insert_contactus.php">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="name">

                            <span style="font-size:20px;">  Enter Your Name :  </span>
                                <input type="text" name="name" style="color:#000000">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="mobnum">

                        <span style="font-size:20px;"> Mobile No : </span>  
                                <input type="text" size="1" maxlength="4" value=" +91  " readonly style="color:#000000">
                                <input type="text" name="mobnum" maxlength="10" style="color:#000000"> 

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="email">

                        <span style="font-size:20px;"> Email Id : </span>  
                                <input type="email" name="email" maxlength="50" required style="color:#000000"> 

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="message">

                        <span style="font-size:20px;"> Message : </span>  
                                <textarea rows="2" cols="20" name="message" style="color:#000000"></textarea>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="submit">

                           <input type="submit">

                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="footer">
                        
                       @copyright
                        
                </div>
            </div>
        </div>
    </body>
</html>
<?php
        }
    else
    {
        header("location:logout.php");
    }

?>