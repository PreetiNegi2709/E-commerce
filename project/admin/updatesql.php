<?php

$con = new mysqli("localhost", "root", "", "project");

if(isset($_SESSION['user'])){
    
//    $id= $_SESSION['user'];
    $id = $_GET['id'];
//    echo $id;
    $sql = "select * from upload_img where id='" . $id . "'";
//     echo $sql;
    $result = $con->query($sql);
    if ($row = mysqli_fetch_array($result)) {
    }    
}
if (isset($_POST['update_img_info'])) {
     echo $id;
    $name = $_POST['img_name'];
    $price = $_POST['img_price'];
    $detail = $_POST['detail'];
    $sql = "update upload_img set name='" . $name . "',price='" . $price . "',detail='" . $detail . "' where id='" . $id . "' ";
    $result = $con->query($sql);

    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $sql = "update upload_img set image='" . $image . "' where id='" . $id . "' ";
        $result = $con->query($sql);
        move_uploaded_file($image_tmp, "../uploaded_img/" . $image);
    }
    ?>
    <script>alert("update sucessful");</script>
   <?php
    header("location:updatelist.php");
}
?>

    
    
    
   