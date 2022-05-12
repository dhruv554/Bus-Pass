<?php
    session_start();
    if(isset($_SESSION["name"]))
        { 
?>
<html>
    <head>
        <title> New Pass </title>
        <link rel="icon" href="images/icon5.png">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            body{
                font-family: "verdana";
                color: #000000;
            }
            #contain{
                /*border: 1px solid;*/
                width: 400px;
            }
            #heading{
                text-align: center; 
                font-size: 40px;
            }
            #name{
                text-align: left;
                margin-top: 20px;
            }
            #aadhar{
                text-align: left;
                margin-top: 10px;
            }
            #dob{
                text-align: left;
                margin-top: 10px;
            }
            #gender{
                text-align: left;
                margin-top: 10px;
            }
            #address{
                text-align: left;
                margin-top: 10px;
            }
            #mobnum{
                text-align: left;
                margin-top: 10px;
            }
            #rout{
                text-align: left;
                margin-top: 10px;
            }
            #duration{
                text-align: left;
                margin-top: 10px;
            }
            #submit{
                text-align: center;
                margin-top: 20px;
            }
            #footer{
                position: fixed;
                bottom: 0px;
                text-align: left;
            }
        
        </style>
    </head>
    
    <body>
        
        <!--Navbar-->
        
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
                    <li class="active"><a href="newpass.php">New Pass</a></li>
                    <li><a href="renewpass.php">Renew Pass</a></li>
                    <li><a href="payment.php">Payment</a></li>
                    <li><a href="contactnew.php">Contact Us</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="passpage.php"><span class="glyphicon glyphicon-print"></span> MyPass</a></li>
                    <li><a href="userprofile.php"><span class="glyphicon glyphicon-user"></span>
                        <?php echo $_SESSION["name"] ?>
                        </a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        
        <!--Navbar End-->
        
        <form action="insert_newpass" method="post">
            <div class="container" id="contain">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="heading">
                        New Pass
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="name">
                        
                      <span style="font-size:20px;">Enter Name :</span>
                        <input type="text" name="name" maxlength="30" required>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="aadhar">
                        
                        <span style="font-size:19px;">Enter Aadhar No. :</span>
                        <input type="text" name="aadhar" maxlength="16" required>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="dob">
                        
                        <span style="font-size:20px;">Birth Date :</span>
                        <input type="date" name="dob" required>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="gender" >
                        
                        <span style="font-size:20px;">Gender :</span>
                            <select name="gender">
                                <option selected>Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="address">
                        
                        <span style="font-size:20px;">Address :</span>
                        <textarea rows="2" cols="20" name="address" required></textarea>
                        <br>
                        <span style="font-size:20px;">State :</span>
                        <input type="text" name="state" value="      Gujarat   " size="10" readonly>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mobnum">
                        
                        <span style="font-size:20px;">Mobile No. :</span>
                        <input type="text" value=" 91 " size="1" readonly>
                        <input type="text" name="mobnum" maxlength="10" required>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="rout">
                        
                        <span style="font-size:20px;">From :</span>
                            <select name="from">
                                <option selected>Select</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Mehsana">Mehsana</option>
                                <option value="Gandhinagar">Gandhinagar</option>
                            </select>
                        
                            <span style="font-size:20px;margin-left:20px">To :</span>
                            <select name="to">
                                <option selected>Select</option>
                                <option value="Vadodra">Vadodra</option>
                                <option value="Surat">Surat</option>
                                <option value="Rajkot">Rajkot</option>
                            </select>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="duration">
                        
                        <span style="font-size:20px;">Duration :</span>
                            <select name="duration">
                                <option selected>Select</option>
                                <option value="1 Month">1 Month</option>
                                <option value="3 Month">3 Month</option>
                                <option value="6 Month">6 Month</option>
                            </select>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="submit">
                        <input type="submit">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="footer">
                    @copyright
                </div>
            </div>
        </form>
    </body>
</html>
<?php
        }
    else
    {
        header("location:logout.php");
    }

?>