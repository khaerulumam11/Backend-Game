<?php

$databaseHost = 'localhost';
$databaseName = 'dengue_buster';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect( $databaseHost, $databaseUsername, $databasePassword, $databaseName );

if ( mysqli_connect_errno() ) {
    echo'Koneksi Gagal:'.mysqli_connect_error();
}

error_reporting( 0 );

?>