<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | Post</title>
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
                    <h2>Post</h2>
                    <hr class="border-bottom"/>
                </div>
            </div>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 col-md-8">
					<form action="" method="post" class="copy_form" enctype="multipart/form-data">
						<b>Nama Product</b>:<br/>
						<input type="text" name="namaProduct" class="form-control col-md-5" required/><br/>
						<b>Gambar</b>:<br/>
						<input type="file" name="gambarProduct" accept="image/*" required/><br/><br/>	
						<b>Tanggal Beli</b>:<br/>
						<input type="date" name="dateProduct" class="form-control col-md-5" required/><br/>
						<b>Versi Barang</b>:<br/>
						<input type="text" name="version" placeholder="New / Second" class="form-control col-md-5" required/><br/>
						<b>Detail</b>:<br/>
						<input type="text" name="detail" class="form-control col-md-5" required/><br/>
						<b>Genre Product</b>:<br/>
						<select name="genreProduct" class="form-control col-md-5" required>
							<option value="PVC">PVC</option>
							<option value="POF">POF</option>
							<option value="STRAPPING">STRAPPING</option>
						</select><br/><br/>
						<b>Harga</b>:<br/>
						<input type="number" name="price" class="form-control col-md-5" required/><br/>
						<br/> 
						<br/>
						<input type="submit" name="post" value="Post Product" class="btn btn-block p-2 text-white" style="background-color:#BC0000"/>
					</form>
					<?php
					if (isset($_POST['post'])) {
						$namaProduct = $_POST['namaProduct'];
						$dateProduct = $_POST['dateProduct'];
						$dateProduct = date("Y-m-d", strtotime($dateProduct));
						$detail = $_POST['detail'];
						$version = $_POST['version'];
						$price = $_POST['price'];
						$genre = $_POST['genreProduct'];
						$idProduct = strval($genre) . "-" . rand(100,999);

						$pathGambar = "Gambar/";
						$temp = explode(".", $_FILES['gambarProduct']['name']);
						$newfilename = $namaProduct . '.' . end($temp);

						$moveGambar = move_uploaded_file($_FILES['gambarProduct']['tmp_name'], $pathGambar . $newfilename);

						$sql = mysqli_query($connection, "INSERT INTO `product`(`productID`, `namaProduct`, `gambarProduct`, `date`, `detail`, `version`, `price`, `genreProduct`) VALUES ('$idProduct','$namaProduct', '$newfilename', '$dateProduct', '$detail', '$version', '$price', '$genre')");
						if ($sql) {						
								echo '<meta http-equiv="refresh" content="0;url=home.php">';
							}
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