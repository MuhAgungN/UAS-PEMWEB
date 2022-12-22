<?php
require_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM harga WHERE id_penerbangan = $id");
if($result){
    header("Location:harga.php");
}
?>