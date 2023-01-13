<?php
session_start();
include_once "menu.php";
include "profilesql.php";
if(isset($_SESSION['user'])){
if ($_SESSION['user']=="admin"){
    header("location:../admin/upload.php");
}}
else{
    header("location:../form/login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../cssandjs/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../cssfile/projectcss.css">
    </head>
    <body >
        <div class="container-fluid pro_img"  >

            <div class="row">
                <div class="col-lg-4 col-sx-12 col-sm-2"></div>
                <div class="col-lg-4 col-sx-12 col-sm-8" style="padding:0px;">
                    <form method="post" class="pro_box">
                        <div class="form-group">

                            <center><h2>PROFILE</h2></center><br>
                            <!--<input type="image" class="form-control user_photo" name="pic"> <br>-->

                           
                            <div class="form-group row"> 
                                <label class="col-sm-4 col-form-label">Userid</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="pro_userid" value="<?php echo $row['userid']; ?>">
                                </div>
                            </div>
                            
                              <div class="form-group row"> 
                                  <label class="col-sm-4 col-form-label">First Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="pro_first_name" value="<?php echo $row['first_name'] ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row"> 
                                <label class="col-sm-4 col-form-label">Last Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="pro_last_name" value="<?php echo $row['last_name'] ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row"> 
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="pro_email" value="<?php echo $row['email'] ?>">
                                </div>
                            </div>
                            
                            <br>

                            <center>
                              <input class="btn btn-outline-info" type="submit" name="edit_pro" value="Edit Profile" style="width:160px;">
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
