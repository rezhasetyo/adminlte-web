<?php
    $koneksi = mysqli_connect("localhost","root","","adminlte2");
    if(!$koneksi){
        echo "Koneksi Database Gagal";
    }
?>