<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <style>
            .form-gap {
                padding-top: 70px;
                
            }
            #contain{
                margin-top: 100px;
                margin-left: 250px;
            }
        </style>
    
    </head>
    <body>
        <div class="container">
            <div class="row" id="contain">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2><br>
                          <div class="panel-body">

                            <form action="getpassword.php" id="register-form" role="form" autocomplete="off" class="form" method="post">

                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-envelope fa-2x color-blue"></i></span>&nbsp;
                                  <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                                </div>
                              </div>
                              <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Submit">
                              </div>

                              <div class="link">
                                <a href="login.php">login now</a> 
                            </div> 
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </body>
</html>