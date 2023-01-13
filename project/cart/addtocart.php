
<?php

session_start();

$con = new mysqli("localhost", "root", "", "project");
$cartid = $_SESSION['cartid'];
$productid = $_GET['id'];
$orderdate = date('Y-m-d');
$sql = "insert into cart (cart_id,product_id,qty,orderdate) values('"
        . $cartid . "','" . $productid . "','1','" . $orderdate . "')";
echo $sql;
$result = $con->query($sql);
if ($result == TRUE) {
    ?>
    <script>
        alert("ADD TO CART SUCCESSFULLY!");
        window.location.href = '../homepage.php';
    </script>
    <?php

} else {
    ?>
    <script>
        alert("NOT ADD TO CART!");
        window.location.href = '../homepage.php';
    </script>
    <?php

}
?>