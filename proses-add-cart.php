<?php
include("koneksi.php");
if (isset($_POST['buy'])) {
	$productId = $_POST['productID'];
	$username = $_POST['username'];
	$userId = $_POST['user_ID'];
	$validCart = mysqli_query($connection, "SELECT * FROM `cart` WHERE `productID` = '$productId' AND `username` = '$username'");
	if (mysqli_num_rows($validCart) > 0) {
		header("location: cart.php");
	}
	else {
		$insertSQL = mysqli_query($connection, "INSERT INTO `cart` (`productID`, `username`, `user_ID`) VALUES ('$productId', '$username', '$userId')");
		if ($insertSQL) {
			header("location: cart.php");
		}
	}
}
?>