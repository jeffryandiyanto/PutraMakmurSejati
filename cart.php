<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | Shopping Cart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/style-1.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
		include("header.php");
		?>
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-3 mt-3 text-center">
                    <h2>Shopping Cart</h2>
                    <hr class="border-bottom"/>
                </div>
            </div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 col-md-8">
				<?php
					if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $url = "https://";
					else $url = "http://";
					$url.= $_SERVER['HTTP_HOST'];
					$url.= $_SERVER['REQUEST_URI'];
					$listProduct = "";
					$total = 0;
					if (isset($_SESSION['username'])) {
						$username = $_SESSION['username'];
						$eksCart = mysqli_query($connection, "SELECT cart.productID, cart.username, product.namaProduct, product.gambarProduct,product.genreProduct, product.price, COUNT(*) as 'jumlah', (product.price * COUNT(*)) as 'total', cart.user_ID FROM cart INNER JOIN product ON cart.productID = product.productID WHERE cart.username = '$username' GROUP BY cart.productID");
						if (mysqli_num_rows($eksCart) > 0) {
							while ($cart = mysqli_fetch_array($eksCart)) {
								$total += $cart['total'];
								$listProduct  .= $cart['namaProduct'] . " - " . $cart['genreProduct'] . ";"; 
								$kode = "01". substr($_SESSION['no_hp'], 2, 8) . date("jns");
				?>
					<div class="card mb-2">
						<div class="card-body">
							<div class="d-flex">
								<img src="Gambar/<?php echo $cart['gambarProduct']; ?>" width="100px" height="100px"/>
								<div class="pl-2 pr-2 w-100">
									<b><?php echo $cart['namaProduct']; ?></b><br/><br/>
									Rp. <?php echo number_format($cart['price'], 2,",","."); ?>
								</div>
								<div class="flex-shrink-1 align-self-center">
									<a href="hapus-item.php?id=<?php echo $cart['productID'] . '&userId=' . $cart['user_ID']; ?>" class="btn btn-danger btn-sm">
										<i class="fas fa-trash-alt"></i>
									</a> 
								</div>
							</div>
						</div>
					</div>
				<?php
							}
				?>
				<p style="font-size:25px;">
					<b>Total</b> Rp. <?php echo number_format($total, 2,",","."); ?><br/>
				</p>
				<form action="nakopay/generate-payment.php" method="post">
					<input type="hidden" name="kode" value="<?php echo $kode; ?>" />
					<input type="hidden" name="item" value="<?php echo $listProduct; ?>" />
					<input type="hidden" name="nominal" value="<?php echo $total; ?>" />
					<input type="hidden" name="callback" value="<?php echo $url; ?>" />
					<input type="hidden" name="akun" value="081282200921" />
					<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" />
					<input type="submit" name="check_out" class="btn btn-block p-3 text-white" style="background-color:#BC0000" value="Checkout"/>
				</form>
				<?php
						}
						else echo "<b><i>Tidak ada Item, silahkan pilih Item untuk melanjutkan.</i></b>";
					}
					if (isset($_GET['kode'])) {
						$hasilKode = $_GET['kode'];
							$sliceKode = substr($kode, -3);
							$item = $_GET['item'];
							$nominal = $_GET['nominal'];
							$username = $_SESSION['username'];
							$rand = rand(100, 999);
							$getCart = mysqli_query($connection, "SELECT * FROM `cart` WHERE `username` = '$username'");
							if (mysqli_num_rows($getCart) > 0) {
								while ($cart = mysqli_fetch_array($getCart)) {
									$product_id = $cart['productID'];
									$uprand = mysqli_query($connection, "UPDATE `product` SET `jumlah_pembelian` = `jumlah_pembelian`+1 WHERE `productID` = '$product_id' ");
								}
							}
							$delCart = mysqli_query($connection, "DELETE FROM `cart` WHERE `username` = '$username'");
							$inputSql = mysqli_query($connection, "INSERT INTO `payment` (kode, item, nominal, username) VALUES ('$hasilKode', '$item', '$nominal', '$username')");
							$uprand = mysqli_query($connection, "UPDATE `user` SET `user_ID` = '$rand'");
							if ($inputSql && $delCart) {
								echo '<meta http-equiv="refresh" content="0;url=history.php">';
							}
							
					}
				?>
			</div>
		</div><br><br><br><br>
		<?php
	      include("footer.php");
	    ?>
		</div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>