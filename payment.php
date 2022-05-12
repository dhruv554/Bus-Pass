<?php
    session_start();
    if(isset($_SESSION["name"]))
    { 
        $conn = mysqli_connect("localhost","root","","14_3");
        $get_mail = $_SESSION["name"];
        
            $qry1 = "SELECT * FROM `bupass` WHERE email='$get_mail'";
            $res1 = mysqli_query($conn,$qry1);
        
            while($row1 = mysqli_fetch_array($res1))
                {  
                    $anum = $row1["aadhar_no"];
                }
                    $count=0;
                    $qry = "SELECT * FROM `newpass` WHERE aadhar_no='$anum'";
                    $result = mysqli_query($conn,$qry);
                    while($row = mysqli_fetch_array($result))
                        {  
                            $count++;
                        }
                    if($count==0)
                        {
                            header("location:payfail.php");
                        }
        
                    else
                        {
                    
?>

<html>
    <head>
        <title> Payment </title>
        <link rel="icon" href="images/icon3.png">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
        
        <style>
        
            body{
                margin: 0px auto;
                padding: 0px;
                font-family: "arial";
            }
            #contain{
                /*border: 1px solid;*/
                width: 400px;
            }
            #heading{
                color: #FF0000;
                margin-top: 20px;
                font-size: 50px;
                font-weight: bold;
                font-style: italic;
                text-decoration-line: underline;
                text-align: center;
            }

            #card{
                font-size: 20px;
                text-align: left;
                margin-top: 50px;
            }

            #cardnum{
                font-size: 20px;
                text-align: left;
                margin-top: 20px;
            }
            #cvv{
                font-size: 20px;
                text-align: left;
                margin-top: 20px;
            }
            #edate{
                font-size: 20px;
                text-align: left;
                margin-top: 20px;
            }
            #name{
                font-size: 20px;
                text-align: left;
                margin-top: 20px;
            }
            #mobnum{
                font-size: 20px;
                text-align: left;
                margin-top: 20px;
            }
            #email{
                font-size: 20px;
                text-align: left;
                margin-top: 20px;
            }
            #submit{
                font-size: 20px;
                text-align: center;
                margin-top: 30px;
            }
            #footer{
                bottom: 10px;
                position: fixed;
                text-align: left;
            }
            
        </style>
    </head>
    
    <body>
        <form action="insert_payment.php" method="post">
        <div class="container-fluid" id="contain">
            <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" id="heading">

                            Payment

                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="card">
                    
                        Card Type :
                        <select name="cardtype" required>
                            <option value="-1" selected>Select</option>
                            <option value="Visa" >Visa</option>
                            <option value="Rupay">Rupay</option>
                            <option value="Mastercard">Mastercard</option>
                        </select>                                
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="cardnum">   
                        
                        Enter Card Number :  
                            <input type="text" name="cnum" size="14" maxlength="16" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="cvv">
                        
                        Enter CVV code :  
                            <input type="password" name="cvv" size="1" maxlength="3" placeholder=" 1 2 3 " required>                               
                </div>
            </div>
             <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="edate"> 
                        
                        Expiry of card :  
                            <input type="month" name="expiry" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="name">
                        
                        Enter Name :  
                            <input type="text" name="name" placeholder="same name as on card">
                        
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="mobnum">
                        
                        Mobile No :  
                            <input type="text" size="1" maxlength="4" value=" +91  " readonly>
                            <input type="text" name="mobnum" maxlength="10" required> 
                        
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="email">
                        
                        Email Id :  
                            <input type="email" name="email" required> 
                        
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="submit">
                        
                       <input type="submit">
                        
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" id="footer">
                       
                    <a href="main.php">Home</a>
                    <a href="userprofile.php" style="margin-left:10px"><?php echo $_SESSION["name"] ?></a><br>
                       @copyright
                        
                </div>
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