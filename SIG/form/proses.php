<?php
        // Sesuaikan dengan konfigurasi koneksi Anda
include "konek.php";
            
            $nama   = $_POST['nama_lokasi'];
            $alamat = $_POST['alamat'];
            $jam    = $_POST['jam_buka'];
            $lat    = $_POST['latitude'];
            $long   = $_POST['longtitude'];
            $mysqli = "INSERT INTO tujuan('nama_lokasi','alamat','jam_buka','latitude','longtitude') VALUES('$nama','$alamat','$jam','$lat','$long' )";
            $result = mysqli_query($con, $mysqli);
            echo "1";
            if ($result) {
                echo "input berhasil";
            } 

            else {
                echo "input gagal";
            }
            
echo "3";
            mysqli_close($con);

?>  