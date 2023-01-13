<?php
session_start();
if ($_SESSION['user']=='') {
    header("location:../form/adminform.php");
} 
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
        <title></title>
        <link rel="stylesheet" type="text/css" href="../cssandjs/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container-fluid bgadmin">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <form class="uploadformbox">
                        <center><H2> IMAGE'S LIST</H2></center><BR>

                        <?php
                        $con = new mysqli("localhost", "root", "", "project");
                        $sql = "select * from upload_img";
                        echo '<center>';
                        echo"<table border=1ocpx>";
                        $result = $con->query($sql);

                        echo '<tr>';
                        echo '<th > id </th>';
                        echo '<th> name </th>';
                        echo '<th> price </th>';
                        echo '<th> detail </th>';
                        echo '<th> images </th>';
                        echo"</tr>";

                        while ($row = mysqli_fetch_array($result)) {

                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['detail'] . "</td>";
                            echo "<td>" . $row['image'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo '</center>';
                        ?>
                        
                    </form>

                </div>
                <div class="col-2"></div>
            </div>
        </div>


    </body>
</html>
