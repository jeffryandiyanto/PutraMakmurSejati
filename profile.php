<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | Profile</title>
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
                    <h2>Profile</h2>
                    <hr class="border-bottom"/>

                </div>
            </div>
            <img src="img/person.png" width="100" height="100"><br><br>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php
					if (isset($_GET['username'])) {
						$username = $_GET['username'];
						$sql = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");
						if ($sql) {
							while($profile = mysqli_fetch_array($sql)) {
								if ($profile['level'] == "admin") {
					?>
					<div class="mb-6">
						<a href="post.php" title="post" class="text-decoration-none rounded p-2 text-white" style="background-color:#BC0000">Update Product</a><br/>
					</div>
					<br/>
					<div class="mb-6">
						<a href="show-transaksi.php" title="show-transaksi" class="text-decoration-none rounded p-2 text-white" style="background-color:#BC0000">Transaksi Pembeli</a><br/>
					</div>
					<br/>
					<div class="mb-6">
						<a href="show-akumulasi.php" title="show-akumulasi" class="text-decoration-none rounded p-2 text-white" style="background-color:#BC0000">Akumulasi Penjualan</a><br/>
					</div>
					<br/>
					<?php
								}
							}
						}
					}
					?>
					<div class="mb-6">
						<a href="edit-profile.php" class="text-decoration-none rounded p-2 text-white mb-6" style="background-color:#BC0000" title="Edit Profile" >Edit Profile</a><br/>
					</div>
					<br/>
					<div class="mb-6">
						<a href="logout.php" title="Logout" class="text-decoration-none rounded p-2 text-white mb-6" style="background-color:#BC0000">Logout</a>
					</div>
					<br/>
				</div>
			</div>
			<?php
              include("footer.php");
            ?>
            </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>