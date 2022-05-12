<?php
    session_start();
    if(isset($_SESSION["name"]))
        { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BusPass</title>
    <link rel="icon" href="images/title_icon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        body{
            
        }
        #img{
            width:100%;
            height:400px;
        }
        @media screen and (max-width: 992px) {
            #img{ 
                height:350px;
            }
        }
        @media screen and (max-width: 768px) {
            #img{ 
                height:300px;
            }
        }
        @media screen and (max-width: 600px) {
            #img{ 
                height:250px;
            }
        }
        .links{
            font-size: 12px;
            margin-top: 10px;
        }

        .linksin_1{
            color: #000000;
            text-align: center;
            padding-top:10px;
            padding-left: 80px;
            padding-right: 70px;
        }
        .linksin_2{
            text-align: center;
            padding-top:10px;
            padding-left: 20px;
        }
        .linksin_2 a{
            color: #000000;
        }
        .linksin_2 a:hover{
            color: #881111;
        }

        .footer{
            width: 100%;
            height: 50px;
            color: #000000;
            padding-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--Navbar Start-->
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
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="newpass.php">New Pass</a></li>
                <li><a href="renewpass.php">Renew Pass</a></li>
                    <li><a href="payment.php">Payment</a></li>
                <li><a href="contactnew.php">Contact Us</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="passpage.php"><span class="glyphicon glyphicon-print"></span> MyPass</a></li>
                <li><a href="userprofile.php"><span class="glyphicon glyphicon-user"></span>
                         <?php echo $_SESSION["name"]; ?>
                    </a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
    <!--Navbar End-->

    

                <!-- Slider Start -->

                        <div class="container-fluid" id="slide"> 
                          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="images/bus1.jpg" class="img-rounded" alt="Image 1" id="img">
                              </div>

                              <div class="item">
                                <img src="images/busslider.jpg" class="img-rounded" alt="Image 2" id="img">
                              </div>

                              <div class="item">
                                <img src="images/bus3.png" class="img-rounded" alt="Image 3" id="img">
                              </div>
                                <div class="item">
                                <img src="images/busslider1.jpg" class="img-rounded" alt="Image 3" id="img">
                              </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                        </div>

                <!-- Slider Ends -->            
            <div class="container" id="contain" >
                <div class="links">
                    <div class="row">     
                        <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="linksin_1">
                                        <span style="font-size:16px;font-weight:bold;color:#000000">About System</span>
                                             <br><br>
                                            Globalization and the Internet have transformed many aspects of our life.
                                            Very easy to use, as simple as fill a form and the rest will be taken care of by the web and database servers.
                                            This are the main reasons why day by day everyone uses of online systems for any kind of their work.<br>
                                            We are here also trying to develop system for customers to make their work easier.So that they don't need to visit bus station every time for their pass.they can generate and renew passes by online system from anywhere and at anytime.   
                                                
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                 <div class="linksin_2">
                                    <span style="font-size:16px;font-weight:bold;color:#000000">Useful Links</span>
                                        <br><br>
                                        <a href="http://gsrtc.in/GSRTCOnline/preCurrentBookingAction.do" target="_blank">
                                            Online Ticket Booking
                                        </a>  
                                        <br><br>
                                        <a href="http://www.gsrtc.in/GSRTCOnline/preTicketCancellation.do?hiddenAction=ViewBooking&flag=T" target="_blank">
                                            View Booking History
                                        </a>  
                                        <br><br>
                                        <a href="http://www.gsrtc.in/GSRTCOnline/preTrackMyBus.do" target="_blank">
                                            Track Bus
                                        </a>  
                                        <br><br>
                                        <a href="https://play.google.com/store/apps/details?id=com.s4ittech.gsrtcbustimetable&hl=en" target="_blank">
                                            GSRTC App
                                        </a>  
                                        
                                </div>   
                            </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="footer">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                                @ copyright 
                        </div>
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