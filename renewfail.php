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
                background-image: url(images/back3.jpg);
                background-repeat: no-repeat;
                color: #000000;
                font-family: "verdana";
            }
            #heading{
                margin-top: 50px;
                text-align: center;
                font-size: 30px;
                color: #FF0000;
            }
            #message{
                margin-top: 50px;
                text-align: center;
            }
            #footer{
                text-align: center;
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
                    <li class="active"><a href="renewpass.php">Renew Pass</a></li>
                    <li><a href="payment.php">Payment</a></li>
                    <li><a href="contactnew.php">Contact Us</a></li>
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
        
        <div class="container-fluid">
            <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="heading">

                            Pass Renewal failed....!

                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="message">
                        
                        Data Not Found !! <br><br>
                        You haven't Generated Pass yet .....<br><br>
                        Please generate pass
                </div>
            </div>
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