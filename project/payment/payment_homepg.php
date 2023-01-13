<?php
session_start();
include_once 'menu.php';
if ($_SESSION['user'] == '') {
    header("location:../form/login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">

        <link href="../cssandjs/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../cssfile/projectcss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body>

        <div class="container-fluid bgpay" >
            <div class="row">
                <div class="col-lg-4 col-sx-12 col-sm-2"></div>
                <div class="col-lg-4 col-sx-12 col-sm-8">



                    <form method="post" class="rgpaybox">
                        <center><h2>PAYMENT INFORMATION:</h2></center><br>
                        
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Card Number</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="c_no" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Expiry date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="exp_date" required>
                            </div>
                        </div>

                            <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Name on card</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="c_name" required>
                            </div>
                        </div>
                        
                            <div class="form-group row">
                            <label class="col-sm-4 col-form-label">CVV</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="cvv_no" required>
                            </div>
                        </div>

                        <br>
                       
                            <center>
                                
                                <input type="submit" class="btn btn-outline-success" name="submit" value="Pay" style="width: 160px;">
                            </center>

                        

                    </form>

                    <div class="col-lg-4 col-sx-12 col-sm-2"></div>
                </div> 
            </div>    
        </div> 

    </body>

</html>