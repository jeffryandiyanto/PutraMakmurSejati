<?php
    session_start();
    if(isset($_SESSION['submit'])) {
        header('location:home.php'); 
    }
    require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Register</title>
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
		if (isset($_SESSION['username'])) header('location: home.php');
	?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8 col-md-8 mt-4">
        <div class="card">
          <div class="card-body">
            <center class="h1 font-weight-bold mb-5">Register</center>
            <form action="process_register.php" method="post">
            <table width="100%">
              <tr>
                <td>Nama</td>
                <td> : </td>
                <td>
                    <input type="text" value="" name="nama" required="" id="nama" placeholder="Nama" class="form-control"> 
                </td>
              </tr>
              <tr>
                <td>Username</td>
                <td> : </td>
                <td>
                    <input type="text" value="" name="username" required="" id="un" placeholder="Username" class="form-control"> 
                </td>
              </tr>
              <tr>
                <td>Email</td>
                <td> : </td>
                <td>
                    <input type="email" value="" name="email" required="" id="email" placeholder="Email" class="form-control"> 
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td> : </td>
                <td>
                    <input type="text" value="" name="alamat" required="" id="un" placeholder="Alamat" class="form-control"> 
                </td>
              </tr>
              <tr>
                <td>No. Handphone</td>
                <td> : </td>
                <td>
                    <input type="number" value="" name="noHp" placeholder="Nomor HP" class="form-control" required> 
                </td>
              </tr>
              <tr>
                <td>Password</td>
                <td> : </td>
                <td>
                    <input type="password" value="" name="password" required="" id="password" placeholder="Password" class="form-control">
                </td>
              </tr>
            </table>
            <input value="Register" type="submit" name="submit" class="btn btn-block text-white mt-4 p-3" style="background-color:#BC0000"/>
            </form>
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