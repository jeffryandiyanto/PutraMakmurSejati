<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | Kategori Product</title>
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
                <div class="col-lg-12 col-md-12 mb-3 mt-5 text-center">
                    <h2>Kategori <?php echo $_GET['kategori'] ?? '' ;?></h2>
                    <hr class="border-bottom"/>
                </div>
            </div>
            <div class="row p-2">
                <?php
				if (isset($_GET['kategori']) && $_GET['kategori'] != '') {
					$productSql = mysqli_query($connection, "SELECT * FROM `product` WHERE `genreProduct` = '$_GET[kategori]'");
					if (mysqli_num_rows($productSql) > 0) {
						while ($product = mysqli_fetch_array($productSql)) {
                ?>
                <div class="col-lg-3 col-md-3 mb-2">
                    <a href="view.php?id=<?php echo $product['productID']; ?>" class="text-decoration-none">
                        <div class="card">
                            <img src="Gambar/<?php echo $product['gambarProduct'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#52307C"><?php echo $product['namaProduct']; ?></h5>
                                <span class="text-dark">
                                    Rp. <?php echo number_format($product['price'], 2,",","."); ?>
                                </span>
								<?php
								if (isset($_SESSION['username'])) {
									$sql = mysqli_query($connection, "SELECT * FROM user WHERE username = '$_SESSION[username]'");
									if ($sql) {
										while($profile = mysqli_fetch_array($sql)) {
											if ($profile['level'] == "admin") {
								?>
								<div>
									<a href="edit.php?product_id=<?php echo $product['productID'] ?>" class="btn btn-primary">Edit</a>
									<a href="delete.php?product_id=<?php echo $product['productID'] . "&pic=" . $product['gambarProduct']; ?>" class="btn btn-danger">Delete</a>
								</div>
								<?php
											}
										}
									}
								}
								?>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-box"></i> <?php echo $product['detail']; ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
						}
                    }
                }
                ?>
            </div>
            <?php
              include("footer.php");
            ?>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>