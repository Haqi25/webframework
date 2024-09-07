<?php
    $koneksi1 = mysqli_connect("localhost","root","","db_contactus");

    if (mysqli_connect_error()){
        echo "$koneksi1 database gagal" .mysqli_connect();
    }
?>