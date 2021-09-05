<?php include("koneksi.php");?>
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
	?>
  <div class="container-fluid">
    <?php
      $nama = $_POST['nama'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
      $pass = $_POST['password'];
      $sql = "SELECT * FROM user WHERE username = '$username'";
      $level = "user";
      $noHp = $_POST['noHp'];
      $userId = "04" . strval($noHp) ;
      $query = $connection->query($sql);
      if($query->num_rows != 0) {
        echo "<div align='center'><br>Username sudah pernah terdaftar, silahkan coba yang lain. <a href='regis.php'><br>Back</a></div>";
        } 
        else {
          if(!$username || !$pass) {
            echo "<div align='center'><br>Masih ada field yang kosong. <a href='regis.php'><br>Back</a>";
          } 
          else {
            $data = "INSERT INTO `user`(`nama`, `username`, `email`, `alamat` ,`password`, `level`, `no_hp`, `user_ID`) VALUES ('$nama','$username','$email','$alamat', '$pass', '$level', '$noHp', '$userId')";
            $save = $connection->query($data);
            if($save) {
              echo "<div align='center'><br>Registrasi berhasil, silahkan <a href='login.php'>Login</a></div>";
            } 
            else {
              echo "<div align='center'><br>Registrasi gagal, mohon <a href='regis.php'>dicoba kembali.</a></div>";
          }
        }
      }
    ?>
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