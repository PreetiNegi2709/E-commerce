<?php

$msg = "";
$con = new mysqli("localhost", "root", "", "project");
if (isset($_POST['b'])) {
    $uid = $_POST['t3'];
    $pas = $_POST['t5'];

    $sql = "select* from user_info where userid='" . $uid . "' and password='" . $pas . "'";
    $result = $con->query($sql);

    if ($row = mysqli_fetch_array($result)) {
        $name = $row['userid'];
        if ($row['email'] == true && $row['password'] == true) {

            header("location:../homepage.php");
            $_SESSION['user'] = $name;
        }
    } else {
        $msg = "invalid userid or password";
    }
}
?>


