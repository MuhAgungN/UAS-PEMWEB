<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "airlines_database";

    $koneksi = mysqli_connect($host,$username,$password,$database);

    if(!$koneksi){
        die("koneksi gagal");
    }
?>