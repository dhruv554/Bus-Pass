<?php
    session_start();
    if(isset($_SESSION["name"]))
    { 
        $conn = mysqli_connect("localhost","root","","14_3");
        $get_mail = $_SESSION["name"];
        
            $qry1 = "SELECT * FROM `bupass` WHERE email='$get_mail'";
            $res2 = mysqli_query($conn,$qry1);

            while($row2 = mysqli_fetch_array($res2))
                {  
                    $anum = $row2["aadhar_no"];
                }
                
            $qry = "SELECT `sr_no`,`name`, `aadhar_no`,`from`, `to`, `duration` FROM `newpass` WHERE aadhar_no='$anum'";
            $result=mysqli_query($conn,$qry);
            while ( $row = mysqli_fetch_array ( $result ) )
                {
                    $srno = $row["sr_no"];
?>
<html>
    <head>
        <title> Renew Pass </title>
        <link rel="icon" href="images/icon4.jpg">
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
                margin-top: 30px;
            }
            #aadhar{
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
            a{
                font-size:15px;
            }
            #submit{
                text-align: center;
                margin-top: 20px;
            }
            #footer{
                position: fixed;
                bottom: 5px;
                text-align: center;
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
                    <li><a href="newpass.php">New Pass</a></li>
                    <li class="active"><a href="renewpass.php">Renew Pass</a></li>
                    <li><a href="payment.php">Payment</a></li>
                    <li><a href="contactnew.php">Contact Us</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="userprofile.php"><span class="glyphicon glyphicon-user"></span>
                        <?php echo $_SESSION["name"] ?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        
        <!--Navbar End-->
        
        <form action="update_renewpass.php" method="post">
            <div class="container" id="contain">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="heading">
                        Renew Pass
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="name">
                        
                    <span style="font-size: 20px;"> 
                        Name :
                    </span>
                        <input type="text" name="name" value="<?php echo $row["name"]; ?>">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="aadhar">
                        
                    <span style="font-size: 20px;">    
                        Aadhar No. :
                    </span>
                        <input type="text" name="aadhar" 
                                value="<?php echo $row["aadhar_no"];?>">
                        
                    </div>
                </div>                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="rout">
                        
                    <span style="font-size: 20px;">
                        From : 
                    </span>
                            <select name="from">
                                <option selected><?php echo $row["from"]; ?></option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Mehsana">Mehsana</option>
                                <option value="Gandhinagar">Gandhinagar</option>
                            </select>
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="rout">
                        
                    <span style="font-size: 20px;">
                        To :
                    </span>
                        <select name="to">
                            <option selected><?php echo $row["to"]; ?></option>
                            <option value="Vadodra">Vadodra</option>
                            <option value="Surat">Surat</option>
                            <option value="Rajkot">Rajkot</option>
                        </select>                            
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="duration">
                    
                    <span style="font-size: 20px;">
                        Duration :                 
                    </span>
                        <select name="duration">
                                <option selected><?php echo $row["duration"]; ?></option>
                                <option value="1 Month">1 Month</option>
                                <option value="3 Month">3 Month</option>
                                <option value="6 Month">6 Month</option>
                            </select>
                               
                        
                    </div>
                </div>
                <input type="hidden" name="sr" value="<?php echo $srno; ?>">
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
    }
    else
    {
        header("location:logout.php");
    }

?>