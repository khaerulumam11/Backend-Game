<?php
require_once( 'config.php' );

class usr {
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query( $con, "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'" );

$row = mysqli_fetch_array( $query );

if ( !empty( $row ) ) {
    $response = new usr();
    $response->success = 1;
    $response->message = 'Success';
    $response->id = $row['id'];
    $response->email = $row['email'];
    die( json_encode( $response ) );

} else {

    $response = new usr();
    $response->success = 0;
    $response->message = 'Email atau password salah';
    die( json_encode( $response ) );
}

mysqli_close( $con );
?>