<?php
    $conn = mysqli_connect("localhost","root","","14_3");

    $ctype = $_POST["cardtype"];
    $cnum = $_POST["cnum"];
    $cvv = $_POST["cvv"];
    $expiry = $_POST["expiry"];
    $name = $_POST["name"];
    $mobnum = $_POST["mobnum"];
    $email = $_POST["email"];

    $qry = "INSERT INTO `payment_info`(`card_type`, `card_no`, `cvv`, `expiry_card`, `name`, `mobile_no`, `email`) VALUES ('$ctype','$cnum','$cvv','$expiry','$name','$mobnum','$email')";
        
    //echo $qry;

    if(mysqli_query($conn,$qry))
    {
?>
                <script type="text/javascript">
                        alert("Payment Completed Successfully");  
                        window.location.href="passpage.php";
                </script>
<?php
    }
    else
    {
?>
                <script type="text/javascript">
                        alert("Payment failed..!! \n Please try again");  
                        window.location.href="payment.php";
                </script>
<?php
    }
       
?>