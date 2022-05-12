<html>
    <head>
        <title> LogIn </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
        
            body{
                font-family: "verdana";
                background-color: #BBBBBB;
            }
            #contain{
                /*border: 1px solid;*/
                width: 400px;
                height: 400px;
                margin: 50px auto;
                background-color: #AAAAAA;
            }

            #heading{
                
                font-size: 50px;
                font-style: italic;
                text-align: center;
            }

            #email{
                
                text-align: center;
                margin-top: 50px;
            }

            #pass{
                text-align: center;
                margin-top: 30px;
            }

            #submit{
                text-align: center;
                margin-top: 30px;
            }
            .link{
                margin-top: 50px;
                text-align: center;
            }
            a{
                color: #00f;
            }
            a:hover{
                color: #f00;
            }
        
        </style>
        
    </head>
    
    <body>
        <form action="login_check.php" method="post">
            <div class="container" id="contain">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="heading">
                        LogIn
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="email">
                        <span style="font-size: 20px;">Email id :</span>
                        
                        <input type="email" name="email" maxlength="30" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="pass">
                        <span style="font-size: 20px;">Password :</span>
                        
                        <input type="password" name="pass" maxlength="12" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="submit">
                        <input type="submit">
                    </div>
                </div>
                <div class="link">
                    <a href="register.php">Register now</a> <br><br>
                    <a href="forgotpass.php">Forgot Password !!</a>
                </div>
            </div>
        </form>
            
    </body>
</html>

