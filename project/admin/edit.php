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

        <div class="container-fluid bgadmin_edit">
            <div class="row">
                <div class="col-lg-2 col-sm-1 col-sx-12"></div>
                <div class="col-lg-8 col-sm-10 col-sx-12">
                    <form class="uploadformbox">
                        <center><H2> EDIT IMAGE'S LIST</H2></center><BR>

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
                        echo '<th> image name </th>';
                        echo'<th> photos </th>';
                        echo '<th> update </th>';
                        echo '<th> delete </th>';
                        echo"</tr>";

                        while ($row = mysqli_fetch_array($result)) {

                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>" . $row['detail'] . "</td>";
                            echo "<td>" . $row['image'] . "</td>";
                            ?>
                            <td><img src="../uploaded_img/<?php echo $row['image']; ?>" height="100" width="170"></td>    
                            <?php echo "<td>" ?> <a href="updatelist.php?id=<?php echo $row['id']?>&name=<?php echo $row['name']?>&price=<?php echo $row['price']?>&detail=<?php echo $row['detail']?>&image=<?php echo $row['image']?> ; ">
                                <button type="button" class="btn btn-primary">edit </button></a><?php "</td>";
                            echo "<td>"
                            ?><a href="editsql.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger"> X </button></a><?php
                            "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo '</center>';
                        ?>
                        <br>
                    </form>

                </div>
                <div class="col-lg-2 col-sm-1 col-sx-12"></div>
            </div>
        </div>


    </body>
</html>


