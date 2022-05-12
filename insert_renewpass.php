<?php
    session_start();
    if(isset($_SESSION["name"]))
    { 
            $name = $_SESSION["uname"];
            $anum = $_SESSION["aadhar"];
            $from = $_SESSION["from"];
            $to = $_SESSION["to"];
            $duration = $_SESSION["duration"];
        
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
                            alert("Your Payment is pending \n please complete payment ");  
                            window.location.href="login.php";
                    </script>
<?php
                }
        
            else
                {
                    $temp=0;
                    $repass = "SELECT * FROM `renewpass` WHERE aadhar='$anum'";
                    $getrepass = mysqli_query($conn,$repass);

                    while($rowrepass = mysqli_fetch_array($getrepass))
                        {  
                            $temp++;
                        }
                    if($temp==0)
                    {                
                        $qry1 = "INSERT INTO `renewpass`(`name`, `aadhar`, `from`, `to`, `duration`) VALUES ('$name','$anum','$from','$to','$duration') ";
                        $res2 = mysqli_query($conn,$qry1);
                        
                        header("location:payment.php");
                    }
                    else
                    {
                        $qryupdate = "UPDATE `renewpass` SET                    `name`='$name',`aadhar`='$anum',`from`='$from',`to`='$to',
                        `duration`='$duration' WHERE aadhar='$anum'";
                        $repassup = mysqli_query($conn,$qryupdate);
                        
                        header("location:payment.php");
                    }
                }
        }
    else
    {
        header("location:logout.php");
    }

?>