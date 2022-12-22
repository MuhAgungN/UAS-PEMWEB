<?php
require_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM penumpang WHERE id_penumpang = $id");
if($result){
    header("Location:penumpang.php");
}
?>