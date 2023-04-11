<?php
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $Tbel = "TBMK";
        $sql = "CREATE TABLE $Tbel(

            KodeMK VARCHAR (8) PRIMARY KEY, 
            Matkul VARCHAR (50),
            SKS INT
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