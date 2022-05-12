<?php

    $name = $_POST["name"];
    $mobnum = $_POST["mobnum"];
    $email = $_POST["email"];
    $msg = $_POST["message"];
    
    $conn = mysqli_connect("localhost","root","","14_3");
    $qry = "INSERT INTO `contactus`(`name`, `mobnum`, `email`, `message`) VALUES                      ('$name','$mobnum','$email','$msg')";
    if(mysqli_query($conn,$qry))
    {
?>
        <script type="text/javascript">
            alert("Your Response has been Recorded !! \n Thank You for writing us");  
            window.location.href="contactnew.php";
        </script>
<?php
    }
    else
    {
?>
        <script type="text/javascript">
            alert("Oops.. Something went wrong !! \n Can you please try again ");  
            window.location.href="contactnew.php";
        </script>
<?php     
    }
?>