<?php
    $conn = mysqli_connect("localhost","root","","14_3");

    $name = $_POST["name"];
    $aadhar = $_POST["aadhar"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $duration = $_POST["duration"];
    $srnum = $_POST["sr"];

    $qry = "UPDATE `newpass` SET `name`='$name',`aadhar_no`='$aadhar',`from`='$from',`to`='$to',`duration`='$duration' WHERE sr_no=$srnum ";
        
    //echo $qry;

    if(mysqli_query($conn,$qry))
    { 
        header('location:renewpass.php');
    }
    else
    {
        echo "Updation failed Please try again <br>";
        echo "<a href='renewpass.php'>renew pass</a>";
    }
       
?>