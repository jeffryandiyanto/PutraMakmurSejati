<?php
include("koneksi.php");
if (isset($_GET['id']) && isset($_GET['userId'])) {
    $id = $_GET['id'];
    $userId = $_GET['userId'];

    $delSql = mysqli_query($connection, "DELETE FROM `cart` WHERE productID = '$id' AND user_ID ='$userId'");
    if ($delSql) {
        header('location: cart.php');
    }
}
?>