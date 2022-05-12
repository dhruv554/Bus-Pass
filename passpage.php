<?php
    session_start();
    if(isset($_SESSION["name"]))
    { 
        $conn = mysqli_connect("localhost","root","","14_3");
        $get_mail = $_SESSION["name"];
        
            $count=0;
            $varify = "SELECT * FROM `payment_info` WHERE email='$get_mail'";
            $res1 = mysqli_query($conn,$varify);
        
            while($row1 = mysqli_fetch_array($res1))
                {  
                    $count++;
                }
        
            if($count==0)
                {
?>
                    <script type="text/javascript">
                        alert("You haven't generated pass yet");
                        window.location.href="main.php";
                    </script>
<?php
                }
            else
                {
                
                $qry1 = "SELECT * FROM `bupass` WHERE email='$get_mail'";
                $res2 = mysqli_query($conn,$qry1);
                while($row2 = mysqli_fetch_array($res2))
                    {  
                        $anum = $row2["aadhar_no"];
                    }    
        
            
                    $temp=0;
                    $repass = "SELECT * FROM `renewpass` WHERE aadhar='$anum'";
                    $getrepass = mysqli_query($conn,$repass);

                    while($rowrepass = mysqli_fetch_array($getrepass))
                        {  
                            $temp++;
                        }
                
                    if($temp==0)
                    {
                        $qry = "SELECT `name`, `aadhar_no`,`from`, `to`, `duration` FROM `newpass` WHERE aadhar_no='$anum'";
                        $result=mysqli_query($conn,$qry);
                        while ( $row = mysqli_fetch_array ( $result ) )
                        {
                            $name = $row["name"];
                            $aadhar_no = $row["aadhar_no"];;
                            $from = $row["from"];
                            $to = $row["to"];
                            $duration = $row["duration"];
                        }   
                    }
                    else
                    {    
                        
                        $qry5 = "SELECT `name`, `aadhar`,`from`, `to`, `duration` FROM `renewpass` WHERE aadhar='$anum'";
                        /*echo $qry5;*/
                        $result5=mysqli_query($conn,$qry5);
                        while ( $row5 = mysqli_fetch_array ( $result5 ) )
                        {
                            $name = $row5["name"];
                            $aadhar_no = $row5["aadhar"];;
                            $from = $row5["from"];
                            $to = $row5["to"];
                            $duration = $row5["duration"];
                        }
                        
                    }
            
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
                margin-top: 100px;
                text-align: center;
                border: 1px solid;
            }
            .b1{
                height: 150px;
                width: 130px;
                border: 1px solid;
            }
            .b2,.b3{
                height: 75px;
                width: 250px;
                /*border: 1px solid;*/
            }
            .b4,.b5{
                height: 50px;
                width: 400px;
                /*border: 1px solid;*/
            }
            #footer{
                position: fixed;
                bottom: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="heading">
                BusPass
            </div>
            <table align="center">
            
                <tr>
                    <td class="b1" rowspan="3">stick your photo here</td>
                    <td class="b">
                        <tr>
                            <td class="b2">
                                Name :
                                <?php echo $name; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="b3">
                                Aadhar No. :
                                <?php echo $aadhar_no; ?>
                            </td>
                        </tr>
                    </td>
                </tr>
                <tr>
                    <td class="b4" colspan="2">
                        From - To :
                            <?php echo $from ; ?> - <?php echo $to; ?>
                    </td>
                </tr>
                <tr>
                    <td class="b5" colspan="2">
                        Duration :
                            <?php echo $duration; ?>
                    </td>
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