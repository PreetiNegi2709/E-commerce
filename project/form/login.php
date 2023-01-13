<?php
session_start();
include_once "../sql/loginsql.php";
include_once "menu.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../cssandjs/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../cssfile/projectcss.css">
    </head>
    <body >
        <div class="container-fluid bglog"  >

            <div class="row">
                <div class="col-lg-4 col-sx-12 col-sm-2"></div>
                <div class="col-lg-4 col-sx-12 col-sm-8" style="padding:0px;">
                    <form method="post" class="lgformbox">
                        <div class="form-group">

                            <center><h2>LOGIN FORM:</h2></center><br>
                            <input type="text" class="form-control" name="t3"  placeholder="enter UserId" required>
                        </div>

                        <div class="form-group"> 
                            <input type="password" class="form-control" name="t5" placeholder="enter Password"required><br>
                        </div>

                        <center>
                            <input type="submit" class="btn btn-success" name="b" value="login" style="width: 160px;"><br>
                            <lable style="font-size:12px;">Forgot your password?</lable><br><br>
                            <a href="register.php" style="color:black;text-decoration: none;">create an account</a><br>
                            <a href="adminform.php" style="color:black;text-decoration: none;font-size:12px;">admin login form</a>
                        </center>

                        <?php
                        if (isset($msg)) {
                            echo $msg;
                        }
                        ?>
                    </form>    
                    <div class="col-lg-4 col-sx-12 col-sm-2"></div>
                </div> 
            </div>    


        </div>

    </body>
</html>
