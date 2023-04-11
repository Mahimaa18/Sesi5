<?php
    include("Konfigurasi.php");
    
    $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($hasil){
        echo "Koneksi ke MYSQL sukses";
    }else{
        echo "Koneksi ke MYSQL gagal";
    }