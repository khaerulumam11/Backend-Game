<?php
require_once( 'config.php' );

class usr {
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
 {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dateBirth = $_POST['dateBirth'];
    $domicile = $_POST['domicile'];
    $sql = "insert into tbl_users (name,email,password,dateBirth,domicile) 
    values ('$nama','$email','$password','$dateBirth','$domicile')";

    if ( mysqli_query( $con, $sql ) )
 {
        $response = new usr();
        $response->success = 1;
        $response->message = 'Success';
        die( json_encode( $response ) );
    } else {
        $response = new usr();
        $response->success = 2;
        $response->message = 'Gagal';
        die( json_encode( $response ) );
    }
    mysqli_close( $con );
}

?>