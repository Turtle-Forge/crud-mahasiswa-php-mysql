<?php

// Koneksi Database
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "dbcrud_mahasiswa";

// Buat Koneksi
$KONEKSI = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE) or die(mysqli_error($KONEKSI));
