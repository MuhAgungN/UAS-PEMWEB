<?php
require_once("koneksi.php");
$id = $_GET['id'];
$acc = mysqli_query($koneksi, "DELETE FROM pembatalan WHERE id_penumpang = $id");
$result = mysqli_query($koneksi, "DELETE FROM penumpang WHERE id_penumpang = $id");
if($result AND $acc){
    header("Location:pembatalan.php");
}
?>