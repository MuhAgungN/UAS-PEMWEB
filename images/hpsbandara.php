<?php
require_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM bandara WHERE id_bandara = $id");
if($result){
    header("location:bandara.php");
}
?>