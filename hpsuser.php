<?php
require_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM users WHERE id = $id");
if($result){
    header("Location:user.php");
}
?>