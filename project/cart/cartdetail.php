<?php
session_start();
include_once 'menu.php';
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

        <link href="../cssandjs/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../cssfile/projectcss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
        <script type="text/javascript">
            function buttonclick() {
                window.location = "../payment/payment_homepg.php";
            }
        </script>
    </head>
    <body class="cartbg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 cart">
                    <center><span style="color:grey;font-size:45px;"><B>CART DETAIL<B></span><center><br><br>
                                        <table class="table table-bordered" style="background-color:#ffffffc9;">
                                            <tr>
                                                <th style="width: 20%; border:1px solid #2125294d;">Image</th>
                                                <th style="width: 40%; border:1px solid #2125294d;">Name</th>
                                                <th style="width: 28%; border:1px solid #2125294d;">Price</th>
                                                <th style="width: 12%; border:1px solid #2125294d;"></th>
                                            </tr> 
                                            <?php
                                            $con = new mysqli("localhost", "root", "", "project");
                                            $cartid = $_SESSION['cartid'];
                                            $sql = "select c.id, u.image,u.name,u.price from cart "
                                                    . "c ,upload_img u where c.product_id=u.id and c.cart_id='" . $cartid . "'";
                                            //echo $sql;
                                            $result = $con->query($sql);
                                            $total = 0;
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td style="height:70px; border:1px solid #2125294d;">
                                                        <img src="../uploaded_img/<?php echo $row['image']; ?>" width="210" height="100"/>
                                                    </td>
                                                    <td style="height:70px; border:1px solid #2125294d;">
                                                        <?php echo $row['name']; ?>
                                                    </td>
                                                    <td style="height:70px; border:1px solid #2125294d;">
                                                        <?php
                                                        $total += $row['price'];
                                                        echo $row['price'];
                                                        ?>
                                                    </td>
                                                    <td style="height:70px; border:1px solid #2125294d;">
                                                        <a href="delete.php?id=<?php echo $row['id']; ?>">
                                                            <input type="button" name="delete" value="X" class="btn btn-danger">
                                                        </a>

                                                    </td>
                                                    <?php
                                                }
                                                ?>
                                            <tr  style="background-color: #beebded1;">
                                                <td colspan="2" style="border:1px solid #8ac5d4;">TOTAL</td>
                                                <td colspan="2" style="border:1px solid #8ac5d4;"><?php echo $total; ?></td>       
                                            </tr>

                                        </table>

                                        <br>

                                        <div class="form-group">
                                            <center><input class="btn btn-outline-success" type="button" id="payment" onclick="buttonclick()" value="Make Payment" style="width:160px;">


                                            </center>

                                        </div>

                                        </div>
                                        <div class="col-lg-2"></div>
                                        </div>
                                        </div>


                                        </body>

                                        </html>
