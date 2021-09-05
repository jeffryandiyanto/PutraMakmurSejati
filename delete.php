<?php
include("koneksi.php");
if (isset($_GET['product_id'])){
	$file = "Gambar/" . $_GET['pic'];
	$id = $_GET['product_id'];
	if (unlink($file)) {
		$del = mysqli_query($connection, "DELETE FROM `product` WHERE productID = '$id'");
		if ($del) header('location: home.php');
	}
}
?>