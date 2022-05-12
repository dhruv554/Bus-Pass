<html>
    <head>
        <title> Register </title>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.css">
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>          
            <style>
                body{
                font-family: "verdana";
                background-color: #79baec;
            }
                
                #heading{
                    font-size: 50px;
                    font-style: italic;
                    text-align: center;
                }

                #name{
                    text-align: center;
                    margin-top: 50px;
                }
                #aadhar{
                    text-align: center;
                    margin-top: 20px;
                }
                #email{
                    text-align: center;
                    margin-top: 20px;
                }

                #pass{
                    text-align: center;
                    margin-top: 20px;
                }
                #repass{
                    text-align: center;
                    margin-top: 20px;
                }

                #submit{
                    text-align: center;
                    margin-top: 30px;
                }
                .link{
                    margin-top: 50px;
                    text-align: center;
                }
                .link a{
                    color: #0000FF;
                }
            </style>
        
    </head>
    
    <body>
        <form action="insert.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="heading">
                        Register
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="name">
                        
                        <span style="font-size: 20px;">Enter Name :</span>
                        <input type="text" name="name" maxlength="30" required>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="aadhar">
                        <span style="font-size: 20px;">Enter Aadhar No. :</span>
                        <input type="text" name="aadhar" size="15" maxlength="16" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="email">
                        <span style="font-size: 20px;">Email id :</span>
                        <input type="email" name="mail" maxlength="30" required>
                        
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
                 <a href="login.php" >click here</a> if you are already registered!
                </div>
            </div>
        </form>
            
    </body>
</html>