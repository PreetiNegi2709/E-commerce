<?php
session_start();
include_once "../sql/adminformsql.php";
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
        <div class="container-fluid bgadminform" >

            <div class="row">
                <div class="col-lg-4 col-sx-12 col-sm-2"></div>
                <div class="col-lg-4 col-sx-12 col-sm-8" style="padding:0px;">
                    <form method="post" class="lgformbox">
                        <div class="form-group">
                            <center><h2>ADMIN LOGIN FORM:</h2></center><br>
                            <input type="text" class="form-control" name="user"  placeholder="enter AdminId" required >
                        </div>

                        <div class="form-group"> 
                            <input type="password" class="form-control" name="pass" placeholder="enter Password" required><br>
                        </div>

                        <center>
                            <button type="submit" class="btn btn-success" name="b" style="width: 160px;">login</button><br>
                            <lable style="font-size:12px;">Forgot your password?</lable><br><br>
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
