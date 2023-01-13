<?php
session_start();
include_once"sql/regsql.php";
$cartid = "";
if (isset($_SESSION['cartid'])) {
//    if cartid have a session
    if ($_SESSION['cartid'] != "") {
        $cartid = $_SESSION['cartid'];
    } else {
        $cartid = date('Y') . "" . date('m') . "" . date('d') . "" . date('H') . "" . date('i') . "" . date('s');
        $_SESSION['cartid'] = $cartid;
    }
//    echo $cartid;
} else {
    $cartid = date('Y') . "" . date('m') . "" . date('d') . "" . date('H') . "" . date('i') . "" . date('s');
    $_SESSION['cartid'] = $cartid;
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cssandjs/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="cssfile/projectcss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="jquery-3.4.1.min.js">
        </script>

    </head>
    <body>


        <div class="container-fluid" >
            <div class="row"  >
                <div class="col-lg-12 col-sm-12 col-sx-12 header" >
                    <nav >
                        <!--logo display-->
                        <div style="width:110px;min-height:50px; float:left;">
                            <a href="homepage.php" > <img src="img/logo.png" class="logo"> </a>
                        </div>
                        <!--search display-->
                        <div style="width:150px;min-height:50px; float:left; ">
                            <form method="get" class="searchform">
                                <div class="form-group">
                                    <input type="text" name="s1" style="width:100px;border-radius: 10px;">
                                    <button type="submit" name="search" class="btn btn-secondary" style="width:35px; height:25px;border-radius: 10px;"><i class="fa fa-search" style="color:gray;font-size:12px;"></i></button>
                                </div>
                            </form>  
                        </div>

                        <ul class="menu">

                            <li><a href="about.php" style="text-decoration: none;color:white;">about </a></li>

                            <li><a href="contact.php" style="text-decoration: none;color:white;">contact</a></li>

                            <li>
                                <a href="user_profile/profile.php"style = "color:white;">
                                    <i class = "fa fa-address-book-o"></i>
                                </a>
                            </li>

                            <li><a href="cart/cartdetail.php" style="color:white;"><i class="fa fa-cart-plus">  </i></a></li>

                            <li>
                                <?php
                                if (!isset($_SESSION['user'])) {
                                    ?>
                                    <a href="form/login.php" style="text-decoration: none;color:white;">Login</a>
                                    <?php
                                }
                                ?>

                            </li>

                            <li>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    ?>
                                    <a href="logout.php" style="color:white;">Logout</a>
                                    <?php
                                }
                                ?>

                            </li>

                            <!--diplay name of user loged in-->
                            <li style="color:white;text-decoration: none;">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $con = new mysqli("localhost", "root", "", "project");
                                    $sql = "SELECT * FROM user_info where userid='" . $_SESSION['user'] . "'  ";
                                    $result = $con->query($sql);
                                    $row = mysqli_fetch_array($result);
                                    if ($_SESSION['user'] != "admin") {
                                        echo 'welcome ' . $row['first_name'];
                                    }

                                    if ($_SESSION['user'] == "admin") {
                                        echo"welcome admin";
                                    }
                                }
                                ?> 
                            </li>

                        </ul>  
                    </nav>
                    <h1> Stock Photography</h1>
                    <p style="color: #ece4e1;text-align: center;font-size:20px;margin-top:0px;"> High Quality Images for Multiple Purpose</p>


                </div>
            </div>

            <div class="row " >
                <?php
                $con = new mysqli("localhost", "root", "", "project");

                $sql = "select* from upload_img";

//                below php is for search
                if (isset($_GET['search']) && $_GET['s1'] != "") {
                    $s = $_GET['s1'];
                    $sql = "select* from upload_img where name like '%" . $s . "%'";
                    $sql = "select* from upload_img where detail like '%" . $s . "%'";
                }
//php for search ended
//php for add to cart
                $result = $con->query($sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo"<div class ='col-lg-4 col-sm-6 col-sx-12'>";
                    echo"<center>";
//                    echo $row['name'];
                    echo '<br>';
                    echo"<img src='uploaded_img/" . $row['image'] . "' width='100' height='100' style='width: 100%; height: auto;' "
//                    echo"<img src='uploaded_img/" . $row['image'] . "' width='100' height='100' style='width: 100%; height: auto;' "
                    . " name=" . $row['name'] . " price=" . $row['price'] . " detail='" . $row['detail']
                    . "' sn=" . $row['id'] . "  class='myimage' data-toggle='modal' data-target='#myModal'  >";
                    ?>

                    <?php
                    echo"</center><br>";
                    echo"</div>";
                }
                ?>    

            </div>
        </div>



        <!--model starts here  -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="width:1200px;">


                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title" style="text-align: center; fony-family:Dosis;letter-spacing: 4px; padding:0px;"><B>IMAGES</B></h3>
                    </div>

                    <div class="modal-body">
                        <div class='left'>
                            <img src="" id="model_image" width="900" height="500" />
                        </div>

                        <div class='right'>
                            <br><br><br>
                            Image name: &nbsp;<span id="model_name"></span><br><br>
                            Price: &nbsp;<span id="modal_price"></span><br><br>
                            Detail: &nbsp;<span id="modal_detail"></span><br><br><br>
                            <!--folowing is to add cart-->

                            <a class="anchor" href="">
                                <button class="btn btn-success">add to cart</button>
                            </a>

                        </div>
                    </div>

                    <div class="modal-footer">

                    </div>
                </div>


            </div>
        </div>
        <!-- end modal  -->


        
        <script>
            $(".myimage").click(function () {
                var id = $(this).attr("sn");
                var name = $(this).attr("name");
                var price = $(this).attr("price");
                var val = $(this).attr('src');
                var detail = $(this).attr("detail");
                // alert(val);
                $("#model_image").attr("src", val);
                $("#model_name").html(name);
                $("#modal_price").html(price);
                $("#modal_detail").html(detail);
                $(".anchor").attr("href", "cart/addtocart.php?id=" + id);
            });

        </script>

        <!--following is the footer-->
        <div class="row footer">
            <div class="col-lg-5 col-sm-4 col-sx-12"></div>
            <div class="col-lg-2 col-sm-4 col-sx-12 social">
                <div class="col-lg-2 col-sm-2 col-sx-12"></div>
                <div class=" col-lg-2 col-sm-2 col-sx-12"><a href="www.facebook.com"><i class="fa fa-facebook" style="color:white;font-size: 20px;"></i></a></div>
                <div class="col-lg-2 col-sm-2 col-sx-12"><i class="fa fa-twitter" style="color:white;font-size: 20px;"></i></div>
                <div class="col-lg-2 col-sm-2 col-sx-12"><i class="fa fa-google" style="color:white;font-size: 20px;"></i></div>
                <div class="col-lg-2 col-sm-2 col-sx-12"><i class="fa fa-pinterest" style="color:white;font-size: 20px;"></i></div>
                <div class="col-lg-2" col-sm-2 col-sx-12></div>
            </div>
            <div class="col-lg-5 col-sm-4"></div>
        </div>

    </body>
</html>

