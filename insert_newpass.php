<?php
    $conn = mysqli_connect("localhost","root","","14_3");

    $name = $_POST["name"];
    $aadhar = $_POST["aadhar"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $add = $_POST["address"];
    $state = $_POST["state"];
    $mobnum = $_POST["mobnum"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $duration = $_POST["duration"];

    $qry = "INSERT INTO `newpass`(`name`, `aadhar_no`, `bdate`, `gender`, `address`, `state`, `mobile_no`, `from`, `to`, `duration`) VALUES ('$name','$aadhar','$dob','$gender','$add','$state','$mobnum','$from','$to','$duration')";
        
    //echo $qry;

    if(mysqli_query($conn,$qry))
    { 
        header("location:payment.php");
    }
    else
    {
?>
                <script type="text/javascript">
                        alert("process failed..");  
                        window.location.href="newpass.php";
                </script>
<?php
    }
       
?>