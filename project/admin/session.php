<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:../admin/upload.php");
}
elseif ($_SESSION['user']=="") {
    
 header("location:../admin/upload.php");
}

?>