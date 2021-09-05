<img src="img/PMS_banner.jpg" alt="PMS Logo" class="img-responsive w-100"/>
<nav class="navbar navbar-expand-lg navbar-light p-0" style="background-color:#BC0000;opacity: .9;">
    <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link p-3" href="home.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-3" href="kategori.php"><i class="fas fa-list"></i> Kategori</a>
            </li>
            <?php
            if (isset($_SESSION['username'])) {
            ?>
            <li class="nav-item">
                <a class="nav-link p-3" href="cart.php"><i class="fas fa-shopping-cart"></i> Shopping Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-3" href="history.php"><i class="fas fa-history"></i> History</a>
            </li>
            <?php
            }
            ?>
        </ul>
        <?php
        if (isset($_SESSION['username'])) {
          $cekSql = mysqli_query($connection, "SELECT nama FROM user WHERE username = '$_SESSION[username]'");
          if ($cekSql) {
            while($user = mysqli_fetch_array($cekSql)) {
        ?>
        <div class="form-inline">
            <a href="profile.php?username=<?php echo $_SESSION['username'];?>" class="p-3 text-decoration-none"><i class="fas fa-user"></i> <?php echo $user['nama']; ?></a>
        </div>
        <?php
            }
          }
        }
        else {
        ?>
        <div class="form-inline">
          <a href="login.php" class="p-3 text-decoration-none"><i class="fas fa-sign-in-alt"></i> Login</a>
        </div>
        <div class="form-inline">
          <a href="regis.php" class="p-3 text-decoration-none"><i class="fas fa-pen"></i> Register</a>
        </div>
        <?php
        }
        ?>
        
    </div>
</nav>