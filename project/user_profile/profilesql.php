<?php
$con = new mysqli("localhost", "root", "", "project");

if (isset($_SESSION['user'])) {
    $uid = $_SESSION['user'];
    $sql = "select * from user_info where userid='" . $uid . "'";
//     echo $sql;
    $result = $con->query($sql);
    if ($row = mysqli_fetch_array($result)) {
           }
}

if (isset($_POST['edit_pro'])) {
    $fname = $_POST['pro_first_name'];
    $lname = $_POST['pro_last_name'];
    $uid = $_POST['pro_userid'];
    $eml=$_POST['pro_email'];
    $sql = "update user_info set email='" . $eml . "', last_name='" . $lname . "',first_name='" . $fname . "' where userid='" . $uid . "' ";
    $result = $con->query($sql);
    if($result==TRUE){
//    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
//        $image = $_FILES['image']['name'];
//        $image_tmp = $_FILES['image']['tmp_name'];
//        $sql = "update upload_img set image='" . $image . "' where id='" . $id . "' ";
//        $result = $con->query($sql);
//        move_uploaded_file($image_tmp, "../uploaded_img/" . $image);
//    }
    ?>
    <script>alert("update sucessful");</script>
    <?php
    }
    else{
        ?>
        <script>alert("update unsucessful");</script>
    <?php }
    header("location:../homepage.php");
    }
?>