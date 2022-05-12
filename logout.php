<?php
    session_start();
    session_destroy();
?>
<html>
    <head>
        <title>Logout</title>
        <style>
            h2{
                margin-top: 50px;
                text-align: center;
            }
            h3{
                text-align: center;
            }
        </style>
    </head>
    
    <body>
    
            <script type="text/javascript">
                    alert("You have been Successfully logout");  
                    window.location.href="login.php";
            </script>    
        
        
    </body>
</html>