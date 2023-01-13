<?php
session_start();
if ($_SESSION['user'] == '') {
    header("location:../form/adminform.php");
}

include_once 'menu.php';
include_once 'updatesql.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../cssandjs/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid bgadmin">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form class="uploadformbox">
                        <center><H2> UPDATE LIST</H2></center><BR>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Image Id</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="img_id" readonly value="<?php echo $row['id']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Image Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="img_name" value="<?php echo $row['name']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Price</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="img_price"value="<?php echo $row['price']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Detail</label>
                            <div class="col-sm-8">
                                <textarea  class="form-control" name="detail" ><?php echo $row['detail']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Select Image</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="image" value="<?php echo $row ?>"><br>
                                <img src="../uploaded_img/<?php echo $row['image']; ?>" width="200" height="100"/><br>
                            </div>
                        </div>

                        <center>
                            <!--<a href="edit.php">-->
                            <input class="btn btn-outline-info" type="submit" name="update_img_info" value="update" style="width:160px;">
                            <!--</a>-->

                        </center>
                    </form>

                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </body>
</html>