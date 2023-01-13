<?php
include_once "../sql/regsql.php";
include_once 'menu.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../cssandjs/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../cssfile/projectcss.css">
    </head>
    <body>
        <div class="container-fluid bgreg" >

            <div class="row">
                <div class="col-lg-4 col-sx-12 col-sm-2"></div>
                <div class="col-lg-4 col-sx-12 col-sm-8">
                    <form method="post" class="rgformbox">
                        <center><h2>REGISTRATION FORM:</h2></center><br>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-sx-12">

                                <div class="form-group">  
                                    <input type="text" class="form-control" name="t1"  placeholder="enter First name" required >
                                </div></div>

                            <div class="col-lg-6 col-sm-6 col-sx-12"><div class="form-group"> 
                                    <input type="text" class="form-control" name="t2" placeholder="enter Last name" required>
                                </div></div>
                        </div>

                        <div class="form-group"> 
                            <input type="text" class="form-control" name="t3" placeholder="enter UserId" required>
                        </div>

                        <div class="form-group"> 
                            <input type="email" class="form-control" name="t4" placeholder="enter Email" required>
                        </div>

                        <div class="form-group"> 
                            <input type="password" class="form-control" name="t5" placeholder="enter Password" required>
                        </div>

                        <!--                         <div class="form-group"> 
                                                    <input type="file" name="p" placeholder="profile picture" required><br>
                                                </div>-->

                        <center>
                            <input type="submit" class="btn btn-success" name="submit" value="Sign Up" style="width: 160px;">
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
