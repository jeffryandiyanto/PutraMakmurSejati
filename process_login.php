<?php
include("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Login</title>
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
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $connection->query($sql);
   $result = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'><br>Username belum terdaftar<br>Silahkan daftar Username baru.
     <a href='login.php'><br>Back</a></div>";
   } else {
     if($pass <> $result['password']) {
       echo "<div align='center'><br>Salah input password, mohon dicoba lagi. <a href='login.php'>
       <br>Back</a></div>";
     } else {
       $_SESSION['username'] = $result['username'];
       $_SESSION['nama'] = $result['nama'];
       $_SESSION['user_ID'] = $result['user_ID'];
       $_SESSION['no_hp'] = $result['no_hp'];
       echo '<meta http-equiv="refresh" content="0;url=home.php">';
     }
   }
?><br><br><br><br><br>
  <?php
      include("footer.php");
    ?>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>