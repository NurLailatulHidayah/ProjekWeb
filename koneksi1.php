<?php

//koneksi ke database
$server = "localhost";
$user = "root";
$password ="";
$database ="db_mhs";

//buat koneksi
$konek = mysqli_connect($server, 
                        $user, 
                        $password, 
                        $database) 
                        or die(mysqli_error($konek));
