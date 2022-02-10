<?php
require_once( 'config.php' );

class usr {
}

$id = $_GET['id'];

$query = mysqli_query( $con, "SELECT * FROM tbl_users WHERE id ='$id'" );

$row = mysqli_fetch_array( $query );

if ( !empty( $row ) ) {
    $response = new usr();
    $response->success = 1;
    $response->message = 'Success';
    $response->id = $row['id'];
    $response->name = $row['name'];
    $response->chance = $row['chance'];
    $response->level = $row['level'];
    $response->score = $row['score'];
    die( json_encode( $response ) );

} else {

    $response = new usr();
    $response->success = 0;
    $response->message = 'Email atau password salah';
    die( json_encode( $response ) );
}

mysqli_close( $con );
?>