<?php
session_start();
$con = new mysqli("localhost", "root", "", "project");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from cart where id='" . $id . "'";
    $result = $con->query($sql);
}
//id ka isset leya butoon ka nahi cause 1 vo form nahi h and no need to make it form .
//ussing isset of the id cause vo delete button id ko delete karega
header("Location:cartdetail.php");


?>
