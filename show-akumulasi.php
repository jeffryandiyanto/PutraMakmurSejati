<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | Transaksi Penjualan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <h2>Transaksi Penjualan</h2>
                    <hr class="border-bottom"/>
                </div>
            </div>
            <table class="table table-border table-light">
                <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Total Penjualan</th>
                </tr>
                </thead>
                <?php
                $no=1;
                $ambildata = mysqli_query($connection, "SELECT * FROM `product`");
                while ($tampil_data = mysqli_fetch_array($ambildata)) {
                    $barang = "";
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil_data[productID]</td>
                        <td>$tampil_data[namaProduct]</td>
                        <td>$tampil_data[jumlah_pembelian]</td>
                    </tr>";
                    $no++;
                }

                ?>
            </table>
            <?php
                if(isset($_GET['hapus_kode'])){
                    mysqli_query($connection,"DELETE FROM payment WHERE kode='$_GET[hapus_kode]'");
                    echo "<meta http-equiv=refresh content=0;URL='show-transaksi.php'>";
                }
            ?>
            <br/><br/><br/><br/><br/><br/><br/><br/>
            <?php
              include("footer.php");
            ?>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>