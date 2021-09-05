<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | Edit Profile</title>
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
                    <h2>Edit Profile</h2>
                    <hr class="border-bottom"/>
                </div>
            </div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-6 col-md-6">
					<?php
					if (isset($_SESSION['username'])) {
						$userSql = mysqli_query($connection, "SELECT * FROM `user` WHERE `username` = '$_SESSION[username]'");
						if (mysqli_num_rows($userSql) > 0) {
							while($profile = mysqli_fetch_array($userSql)) {
					?>
					<form action="" method="post">
					<b>Nama</b>:<br/>
						<input type="text" class="form-control" name="namaBaru" value="<?php echo $profile['nama']; ?>"/><br/>
					<b>Alamat</b>:<br/>
						<input type="text" class="form-control" name="alamatBaru" value="<?php echo $profile['alamat']; ?>"/><br/>
					<b>No Handphone</b>:<br/>
						<input type="text" class="form-control" name="no_hpBaru" value="<?php echo $profile['no_hp']; ?>"/><br/>
					<input value="Edit" type="submit" class="btn btn-block text-white p-3" name="edit" style="background-color:#BC0000" value="Edit"/><br><br>
					</form>
					<?php
							}
						}
					}
					if (isset($_POST['edit'])) {
						$namaBaru = $_POST['namaBaru'];
						$alamatBaru = $_POST['alamatBaru'];
						$no_hpBaru = $_POST['no_hpBaru'];
						$eksekusi = mysqli_query($connection, "UPDATE `user` SET `nama` = '$namaBaru', `alamat` = '$alamatBaru', `no_hp` = '$no_hpBaru' WHERE `username` = '$_SESSION[username]'");
						if ($eksekusi) echo '<meta http-equiv="refresh" content="0;url=edit-profile.php">';
					}
					?>
				</div>
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