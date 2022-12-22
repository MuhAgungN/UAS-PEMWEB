<?php
require_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM pesawat WHERE id_pesawat = $id");
if($result){
    header("Location:pesawat.php");
}
?>