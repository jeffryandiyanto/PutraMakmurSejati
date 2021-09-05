<?php
include("koneksi.php");
session_start();
if (isset($_GET['id']) && $_GET['id'] != '') {
    $product = mysqli_query($connection, "SELECT * FROM `product` WHERE `productID` = '$_GET[id]'");
    if (mysqli_num_rows($product) > 0) {
        while ($show = mysqli_fetch_array($product)) {

?>
<html>
    <head> 
        <title><?php echo $show['namaProduct']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/style-1.css">
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
		<?php include("header.php");?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td width="25%" valign="middle" align="left" class="p-1 w-auto">
                                    <img src="Gambar/<?php echo $show['gambarProduct']; ?>" class="img-responsive" style="max-width:220px;max-height:220px"/>
                                </td>
                                <td valign="top" class="p-2" width="75%">
                                    <div class="badge" style="color:#BC0000; border:1px solid #BC0000">Product</div>
                                    <h2 class="mb-1 font-weight-bold" style="color:#000000"><?php echo $show['namaProduct']; ?></h2>
                                    <div class="mt-5">
                                        <h4 class="mb-1 font-weight-bold" style="color:#BC0000">
                                            <?php
                                                echo "Rp. " . $show['price'];
                                            ?>
                                        </h4>
                                    </div>
                                    <div class="mt-5">
                                        <?php echo date("d F Y", strtotime($show['date'])); ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4">
                    <h3 class="font-weight-bold">Keterangan Product</h3><br>
					<div class="mb-3">
						<?php
						echo "<b>Detail Produk : </b><i>" . $show['detail'] . "</i><br>";
                        echo "<b>Kondisi Barang : </b><i>" . $show['version'] . "</i><br>";
						?>
					</div>
                    
                    <?php
                    if (isset($_SESSION['username'])) {
                    ?>
                    <form action="proses-add-cart.php" method="post">
                        <input type="hidden" name="productID" value="<?php echo $show['productID']; ?>" />
                        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" />
                        <input type="hidden" name="user_ID" value="<?php echo $_SESSION['user_ID']; ?>" />
                        <input type="submit" name="buy" class="btn btn-block text-white p-3" value="Beli" style="background-color:#BC0000" />
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4">
                    <h3 class="font-weight-bold">Lainnya <?php echo $show['genreProduct']; ?>
                </div>
            </div>
            <div class="row">
                <?php
                $other = mysqli_query($connection, "SELECT * FROM `product` WHERE `genreProduct` LIKE '%$show[genreProduct]%' AND NOT `productID` = '$show[productID]'");
                if (mysqli_num_rows($other) > 0) {
                    while ($oProduct = mysqli_fetch_array($other)) {
                ?>
                <div class="col-lg-2 col-md-2 mb-2">
                    <a href="view.php?id=<?php echo $oProduct['productID']; ?>" class="text-decoration-none text-secondary">
                        <center>
                        <img src="Gambar/<?php echo $oProduct['gambarProduct']; ?>" class="img-responsive" width="120px" height="120px"/><br/>
                        <?php 
                            echo $oProduct['namaProduct'] . "<br>";
                            echo date("d M Y", strtotime($oProduct['date'])); 
                        ?>
                        </center>
                    </a>
                </div>
                <?php
                    }
                }
                ?>
            </div>
            <br><br>
            <?php
              include("footer.php");
            ?>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
<?php
        }
    }
}
?>