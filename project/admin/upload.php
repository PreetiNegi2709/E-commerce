<?php
session_start();
if ($_SESSION['user']=='') {
    header("location:../form/adminform.php");
} 
include_once "../sql/imgupload.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../cssandjs/css/bootstrap.min.css">

    </head>
    <body >
        <?php include_once 'menu.php'; ?>
        <div class="container-fluid bgadmin">
            <div class="row">

                <div class="col-3"></div>
                <div class="col-6">  

                    <form method="post" enctype="multipart/form-data" class="uploadformbox">

                        <center><H2>UPLOAD IMAGES</H2></center><BR>
                        <div class="form-group"> 

                            <input type="text" class="form-control" name="t1" placeholder="enter img id" required>
                        </div>

                        <div class="form-group"> 
                            <input type="text" class="form-control" name="t2" placeholder="enter img name" required>
                        </div>

                        <div class="form-group"> 
                            <input type="text" class="form-control" name="t3" placeholder="enter img price" required>
                        </div>

                        <div class="form-group"> 
                            <textarea  class="form-control" name="detail" placeholder="enter img details" required></textarea>
                        </div>

                        <div class="form-group"> 
                            <input type="file" name="image" placeholder="enter img" required><br>
                        </div>

                        <center>
                            <input class="btn btn-success" type="submit" name="upload" value="upload" style="width:160px;" ><br><br>

                        </center>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
    </body>
</html>