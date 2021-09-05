<?php
include("koneksi.php");
session_start();
?>
<html>
    <head>
		<title>Putra Makmur Sejati | Kategori</title>
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
                    <h2>Kategori Product</h2>
                    <hr class="border-bottom"/>
                </div>
            </div>
            <div class="row mb-3 ml-2 mr-2 border border-secondary p-3 justify-content-center">
			<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">A</center>
					<ul>
						<?php
						$listA = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'A' GROUP BY LEFT(genreProduct, 3)");
						while($rowA = mysqli_fetch_array($listA)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowA['genreProduct']; ?>" title="<?php echo $rowA['genreProduct']; ?>"><?php echo $rowA['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">B</center>
					<ul>
						<?php
						$listB = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'B' GROUP BY LEFT(genreProduct, 3)");
						while($rowB = mysqli_fetch_array($listB)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowB['genreProduct']; ?>" title="<?php echo $rowB['genreProduct']; ?>"><?php echo $rowB['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">C</center>
					<ul>
						<?php
						$listC = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'C' GROUP BY LEFT(genreProduct, 3)");
						while($rowC = mysqli_fetch_array($listC)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowC['genreProduct']; ?>" title="<?php echo $rowC['genreProduct']; ?>"><?php echo $rowC['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">D</center>
					<ul>
						<?php
						$listD = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'D' GROUP BY LEFT(genreProduct, 3)");
						while($rowD = mysqli_fetch_array($listD)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowD['genreProduct']; ?>" title="<?php echo $rowD['genreProduct']; ?>"><?php echo $rowD['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>

			<div class="row mb-3 ml-2 mr-2 border border-secondary p-3 justify-content-center">
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">E</center>
					<ul>
						<?php
						$listE = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'E' GROUP BY LEFT(genreProduct, 3)");
						while($rowE = mysqli_fetch_array($listE)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowE['genreProduct']; ?>" title="<?php echo $rowE['genreProduct']; ?>"><?php echo $rowE['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">F</center>
					<ul>
						<?php
						$listF = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'F' GROUP BY LEFT(genreProduct, 3)");
						while($rowF = mysqli_fetch_array($listF)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowF['genreProduct']; ?>" title="<?php echo $rowF['genreProduct']; ?>"><?php echo $rowF['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">G</center>
					<ul>
						<?php
						$listG = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'G' GROUP BY LEFT(genreProduct, 3)");
						while($rowG = mysqli_fetch_array($listG)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowG['genreProduct']; ?>" title="<?php echo $rowG['genreProduct']; ?>"><?php echo $rowG['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">H</center>
					<ul>
						<?php
						$listH = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'H' GROUP BY LEFT(genreProduct, 3)");
						while($rowH = mysqli_fetch_array($listH)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowH['genreProduct']; ?>" title="<?php echo $rowH['genreProduct']; ?>"><?php echo $rowH['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>

			<div class="row mb-3 ml-2 mr-2 border border-secondary p-3 justify-content-center">
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">I</center>
					<ul>
						<?php
						$listI = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'I' GROUP BY LEFT(genreProduct, 3)");
						while($rowI = mysqli_fetch_array($listI)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowI['genreProduct']; ?>" title="<?php echo $rowI['genreProduct']; ?>"><?php echo $rowI['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">J</center>
					<ul>
						<?php
						$listJ = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'J' GROUP BY LEFT(genreProduct, 3)");
						while($rowJ = mysqli_fetch_array($listJ)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowJ['genreProduct']; ?>" title="<?php echo $rowJ['genreProduct']; ?>"><?php echo $rowJ['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">K</center>
					<ul>
						<?php
						$listK = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'K' GROUP BY LEFT(genreProduct, 3)");
						while($rowK = mysqli_fetch_array($listK)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowK['genreProduct']; ?>" title="<?php echo $rowK['genreProduct']; ?>"><?php echo $rowK['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">L</center>
					<ul>
						<?php
						$listL = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'L' GROUP BY LEFT(genreProduct, 3)");
						while($rowL = mysqli_fetch_array($listL)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowL['genreProduct']; ?>" title="<?php echo $rowL['genreProduct']; ?>"><?php echo $rowL['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>

			<div class="row mb-3 ml-2 mr-2 border border-secondary p-3 justify-content-center">
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">M</center>
					<ul>
						<?php
						$listM = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'M' GROUP BY LEFT(genreProduct, 3)");
						while($rowM = mysqli_fetch_array($listM)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowM['genreProduct']; ?>" title="<?php echo $rowM['genreProduct']; ?>"><?php echo $rowM['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">N</center>
					<ul>
						<?php
						$listN = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'N' GROUP BY LEFT(genreProduct, 3)");
						while($rowN = mysqli_fetch_array($listN)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowN['genreProduct']; ?>" title="<?php echo $rowN['genreProduct']; ?>"><?php echo $rowN['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">O</center>
					<ul>
						<?php
						$listO = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'O' GROUP BY LEFT(genreProduct, 3)");
						while($rowO = mysqli_fetch_array($listO)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowO['genreProduct']; ?>" title="<?php echo $rowO['genreProduct']; ?>"><?php echo $rowO['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">P</center>
					<ul>
						<?php
						$listP = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'P' GROUP BY LEFT(genreProduct, 3)");
						while($rowP = mysqli_fetch_array($listP)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowP['genreProduct']; ?>" title="<?php echo $rowP['genreProduct']; ?>"><?php echo $rowP['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>

			<div class="row mb-3 ml-2 mr-2 border border-secondary p-3 justify-content-center">
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">Q</center>
					<ul>
						<?php
						$listQ = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'Q' GROUP BY LEFT(genreProduct, 3)");
						while($rowQ = mysqli_fetch_array($listQ)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowQ['genreProduct']; ?>" title="<?php echo $rowQ['genreProduct']; ?>"><?php echo $rowQ['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">R</center>
					<ul>
						<?php
						$listR = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'R' GROUP BY LEFT(genreProduct, 3)");
						while($rowR = mysqli_fetch_array($listR)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowR['genreProduct']; ?>" title="<?php echo $rowR['genreProduct']; ?>"><?php echo $rowR['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">S</center>
					<ul>
						<?php
						$listS = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'S' GROUP BY LEFT(genreProduct, 3)");
						while($rowS = mysqli_fetch_array($listS)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowS['genreProduct']; ?>" title="<?php echo $rowS['genreProduct']; ?>"><?php echo $rowS['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">T</center>
					<ul>
						<?php
						$listT = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'T' GROUP BY LEFT(genreProduct, 3)");
						while($rowT = mysqli_fetch_array($listT)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowT['genreProduct']; ?>" title="<?php echo $rowT['genreProduct']; ?>"><?php echo $rowT['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>

			<div class="row mb-3 ml-2 mr-2 border border-secondary p-3 justify-content-center">
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">U</center>
					<ul>
						<?php
						$listU = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'U' GROUP BY LEFT(genreProduct, 3)");
						while($rowU = mysqli_fetch_array($listU)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowU['genreProduct']; ?>" title="<?php echo $rowU['genreProduct']; ?>"><?php echo $rowU['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">V</center>
					<ul>
						<?php
						$listV = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'V' GROUP BY LEFT(genreProduct, 3)");
						while($rowV = mysqli_fetch_array($listV)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowV['genreProduct']; ?>" title="<?php echo $rowV['genreProduct']; ?>"><?php echo $rowV['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3">
					<center class="h2 font-weight-bold">W</center>
					<ul>
						<?php
						$listW = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'W' GROUP BY LEFT(genreProduct, 3)");
						while($rowW = mysqli_fetch_array($listW)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowW['genreProduct']; ?>" title="<?php echo $rowW['genreProduct']; ?>"><?php echo $rowW['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>

			<div class="row mb-3 ml-2 mr-2 border border-secondary p-3 justify-content-center">
				<div class="col-lg-4 col-md-4">
					<center class="h2 font-weight-bold">X</center>
					<ul>
						<?php
						$listX = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'X' GROUP BY LEFT(genreProduct, 3)");
						while($rowX = mysqli_fetch_array($listX)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowX['genreProduct']; ?>" title="<?php echo $rowX['genreProduct']; ?>"><?php echo $rowX['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4">
					<center class="h2 font-weight-bold">Y</center>
					<ul>
						<?php
						$listY = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'Y' GROUP BY LEFT(genreProduct, 3)");
						while($rowY = mysqli_fetch_array($listY)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowX['genreProduct']; ?>" title="<?php echo $rowY['genreProduct']; ?>"><?php echo $rowY['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4">
					<center class="h2 font-weight-bold">Z</center>
					<ul>
						<?php
						$listZ = mysqli_query($connection, "SELECT LEFT(genreProduct, 1) as 'abjad', genreProduct FROM product WHERE LEFT(genreProduct, 1) = 'Z' GROUP BY LEFT(genreProduct, 3)");
						while($rowZ = mysqli_fetch_array($listZ)) {
						?>
						<li>
							<a href="show-kategori.php?kategori=<?php echo $rowZ['genreProduct']; ?>" title="<?php echo $rowZ['genreProduct']; ?>"><?php echo $rowZ['genreProduct']; ?></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
            </div>
            <?php
		      include("footer.php");
		    ?>
            </div>
        </div>
    </body>
	<style>
			a{
				font-weight: Bold;
				color: red;
				text-decoration: none;
			}
		</style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>