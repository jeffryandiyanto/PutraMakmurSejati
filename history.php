<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | History</title>
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
                    <h2>History</h2>
                    <hr class="border-bottom"/>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-ongoing-tab" data-toggle="tab" href="#nav-ongoing" role="tab" aria-controls="nav-ongoing" aria-selected="true">Sedang Berlanjut</a>
                    <a class="nav-item nav-link" id="nav-end-tab" data-toggle="tab" href="#nav-end" role="tab" aria-controls="nav-end" aria-selected="false">Selesai</a>
                </div>
            </nav>
            <div class="tab-content mb-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-ongoing" role="tabpanel" aria-labelledby="nav-ongoing-tab">
                    <?php
                    $ongoing = mysqli_query($connection, "SELECT * FROM `payment` WHERE `status` = 'belum' AND `username` = '$_SESSION[username]' ORDER BY `dibuat` DESC");
                    if (mysqli_num_rows($ongoing) > 0) {
                        while ($listOn = mysqli_fetch_array($ongoing)) {
                    ?>
                    <div class="border-bottom mt-3">
                        <div class="text-center d-flex justify-content-center">
                            <span class="bg-warning p-3 text-dark">
                                <?php echo $listOn['kode']; ?>
                            </span>
                        </div>
                        <center><small class="text-secondary">Nomor Virtual Akun</small></center>
                        <br/>
                        <b>Rincian Item</b>:<br/>
                        <ul>
                        <?php
                        $listItem = explode(";", $listOn['item']);
                        for ($i = 0; $i < count($listItem)-1; $i++){
                            echo "<li>" . $listItem[$i] ."</li>";
                        }
                        ?>
                        </ul>
                        <div class="d-flex">
                            <span class="pt-2 pb-2 mr-2">
                                <b>Total</b>: Rp. <?php echo number_format($listOn['nominal'],2,',','.'); ?>
                            </span>
                            <a href="refresh.php?kode=<?php echo $listOn['kode']; ?>" class="btn btn-sm p-2 text-white" style="background-color:#BC0000">Refresh Pembayaran</a>
                        </div>
                        <b>Tanggal</b>: <?php echo date("d F Y H:i:s", strtotime($listOn['dibuat'])); ?>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="tab-pane fade" id="nav-end" role="tabpanel" aria-labelledby="nav-end-tab">
                    <?php
                    $selesai = mysqli_query($connection, "SELECT * FROM `payment` WHERE `status` = 'lunas' AND `username` = '$_SESSION[username]' ORDER BY `dibuat` DESC");
                    if (mysqli_num_rows($selesai) > 0) {
                        while ($listEnd = mysqli_fetch_array($selesai)) {
                    ?>
                    <div class="border-bottom mt-3">
                        <b>Rincian Item</b>:<br/>
                        <ul>
                        <?php
                        $listItem = explode(";", $listEnd['item']);
                        for ($i = 0; $i < count($listItem)-1; $i++){
                        ?>
                        <li><?php echo $listItem[$i]; ?></li>
                        <?php
                        }
                        ?>
                        </ul>
                        <b>Tanggal</b>: <?php echo date("d F Y H:i:s", strtotime($listEnd['dibuat'])); ?><br/>
                        <b>Total Harga</b>: Rp. <?php echo number_format($listEnd['nominal'],2,',','.'); ?><br/>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Cara Membayar?
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse in" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        1. Buat akun di <a href="nakopay/index.php">NakoPay</a> terlebih dahulu<br/>
                        2. Pilih transfer ke <b>NakoPay Virtual Account</b> dan masukkan nomor rekening virtual akun<br/>
                        3. Klik "Kirim"<br/>
                        4. Pada page history di Daily Star, klik tombol yang bertuliskan <b>Refresh</b> untuk cek pembayarannya.
                    </div>
                    </div>
                </div>
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