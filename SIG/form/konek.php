<?php 
            $host     = "localhost";
            $username = "root";
            $password = "";
            $db   = "lokasi";
            $con = mysqli_connect($host,$username,$password,$db);
            if (!$con){
                die ("Koneksi db gagal: ");
            }
            echo "Koneksi sukses";
            mysqli_close($con);
?>