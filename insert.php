<?php
    $conn = mysqli_connect("localhost","root","","14_3");

    $name = $_POST["name"];
    $aadhar = $_POST["aadhar"];
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];

    $count=0;
    $varify = "SELECT * FROM `bupass` WHERE aadhar_no=$aadhar";
    $result = mysqli_query($conn,$varify);    
    while($row = mysqli_fetch_array($result))
        {     
            $count++;
            $anum = $row["aadhar_no"];
        }
    if($count==0)
        {
            $qry = "INSERT INTO `bupass`(`name`, `aadhar_no`, `email`, `pass`) VALUES ('$name',$aadhar,'$mail','$pass')";
            //echo $qry;

            if(mysqli_query($conn,$qry))
            {
?>
                <script type="text/javascript">
                        alert("Registration Successfull !!");  
                        window.location.href="login.php";
                </script>
<?php 
            }
            else
            {
?>
                <script type="text/javascript">
                        alert("Registration failed !! \n Please try again");  
                        window.location.href="register.php";
                </script>
<?php
                
            }
        }
    else
        {   
?>
            <script type="text/javascript">    
                alert("The Aadhar Number <?php echo $anum ?> is already registered !!");  
                window.location.href="register.php";
            </script>
<?php
        }    
?>