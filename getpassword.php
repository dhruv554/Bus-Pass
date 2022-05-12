<?php
    $conn = mysqli_connect("localhost","root","","14_3");
    $mail = $_POST["email"];

    $qry = "SELECT * FROM `bupass` WHERE email='$mail' ";
    $result = mysqli_query($conn,$qry);
    $count=0;
    
    while($row = mysqli_fetch_array($result))
        {     
            $count++;
            $pass=$row["pass"];
        }
    if($count==0)
        {
?>
                <script type="text/javascript">
                        alert("Email Id doesn't exist....!!!!");  
                        window.location.href="forgotpass.php";
                </script>
<?php
        }
    else
        {
?>
                <script type="text/javascript">
                        alert("Your Password is <?php echo $pass; ?> ");  
                        window.location.href="login.php";
                </script>
<?php
        }

?>