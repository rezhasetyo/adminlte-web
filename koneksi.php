<?php
    $koneksi = mysqli_connect("localhost","root","","adminlte");
    if(!$koneksi){
        echo "Koneksi Database Gagal";
    }
?>