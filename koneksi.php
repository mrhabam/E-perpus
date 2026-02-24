<?php

session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi = mysqli_connect("localhost", "root", "", "eperpus");

//cek connection
if(mysqli_connect_errno()) {
    echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}

?>