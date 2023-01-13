<?php
$con = new mysqli("localhost", "root", "", "project");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from upload_img where id='" . $id . "'";
    $result = $con->query($sql);
}
//echo 'ok';
header("Location:edit.php");
?>
