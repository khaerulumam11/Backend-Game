<?php
require_once( 'config.php' );

class usr {
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
 {
    $score = $_POST['score'];
    $chance = $_POST['chance'];
    $id = $_GET['id'];
    $sql = "UPDATE tbl_users SET chance = '$chance', score = '$score'  WHERE id = '$id'";

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