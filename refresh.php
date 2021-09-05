<?php
include("koneksi.php");
if (isset($_GET['kode'])) {
    $api = "e7861098831cd3ce54a0573798cabf92";
    $qKode = $_GET['kode'];
    $data = file_get_contents('http://localhost:80/PMS/nakopay/api-transaksi.php?api=' . $api . '&q=' . $qKode);
    $json = json_decode($data, true);
    if ($json['result'] == 'Sukses') {
        if ($json['item'][0]['status'] == "lunas") {
            $updateSql = mysqli_query($connection, "UPDATE `payment` SET `status` = 'lunas' WHERE `kode` = '$qKode'");
            if ($updateSql) {
                header("location: history.php");
            }
        }
        else header("location: history.php");
    }
    echo $json['result'];
}
?>