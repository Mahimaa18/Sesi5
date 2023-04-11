<?php
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $Tbel = "TBMHS";
        $sql = "CREATE TABLE $Tbel(

            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            Nama VARCHAR (35),
            NIM VARCHAR (10),
            Alamat VARCHAR (25),
            Telfon VARCHAR (15),
            Prodi VARCHAR (2),
            Jeniskelamin VARCHAR (1),
            Tgllahir DATE
        )" ;
        $hasil = mysqli_query ($cnn, $sql );
        if($hasil){
            echo "Pembuatan Tabel" . $Tbel . "Sukses";

        }else{
            echo "Pembuatan Tabel" . $Tbel . "Gagal";
        }


    }else{
        echo "Koneksi ke MYSQL gagal";
    }