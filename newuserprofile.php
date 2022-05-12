<?php
    session_start();
    if(isset($_SESSION["name"]))
    { 
        $conn = mysqli_connect("localhost","root","","14_3");
        $getmail=$_SESSION["name"];
        
        $qry = "SELECT `name`, `aadhar_no`, `email` FROM `bupass` WHERE email='$getmail' ";
        $result = mysqli_query($conn,$qry);

        while($row = mysqli_fetch_array($result))
            {  
?>

<html>
    <head>
        <title>Profile</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            body{
                color: #000000;
                font-family: "verdana";
            }
            #heading{
                text-align: center;
                font-size: 40px;
                text-decoration: underline;
            }
            table{
                /*border: 1px solid;*/
                width: 500px;
                margin-top: 20px;
            }
            th{
                /*border: 1px solid;*/
                padding-top: 20px;
            }
            td{
                /*border: 1px solid;*/
                width: 370px;
                padding-top: 20px;
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
                                    <li><a href="renewpass.php">Renew Pass</a></li>
                                    <li><a href="payment.php">Payment</a></li>
                                    <li><a href="contactnew.php">Contact Us</a></li>
                              </ul>
                              <ul class="nav navbar-nav navbar-right">
                                  <li><a href="passpage.php"><span class="glyphicon glyphicon-print"></span> MyPass</a></li>
                                    <li class="active"><a href="userprofile.php"><span class="glyphicon glyphicon-user"></span> 
                                        <?php echo $_SESSION["name"] ?></a></li>
                                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                              </ul>
                        </div>
                  </div>
            </nav>
        
        <!--Navbar End-->
        
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="heading">
                Profile
            </div>
            <table align="center">
                <tr>
                    <th> Name : </th>
                    <td><?php echo $row["name"]; ?></td>
                </tr>
                <tr>
                    <th> Aadhar No. : </th>
                    <td><?php echo $row["aadhar_no"]; ?></td>
                </tr>
                <tr>
                    <th> Email Id : </th>
                    <td><?php echo $row["email"]; ?></td>
                </tr>
            
            </table>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="footer">
                    @copyright
                </div>
        </div>    
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