<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","14_3");
    $mail = $_POST["email"];
    $pass = $_POST["pass"];

    $qry = "SELECT * FROM `bupass` WHERE email='$mail' && pass='$pass'";
    $result = mysqli_query($conn,$qry);
    $count=0;
    
    while($row = mysqli_fetch_array($result))
        {     
            $count++;
        }

    if($count==0)
            {

    ?>
                <script type="text/javascript">
                        alert("Invalid Username/Password");  
                        window.location.href="login.php";
                </script>
    <?php

            }

    else
            {   
                $_SESSION["name"]=$mail;
                header("location:main.php");
            }

?>