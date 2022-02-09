<?php
require_once( 'config.php' );

$sql = 'select * from tbl_user ORDER BY score DESC';

$r = mysqli_query( $con, $sql );

$result = array();
$location = array();

while( $row = mysqli_fetch_array( $r ) )
 {
    array_push( $result, array(
        'id_user'=>$row['id'],
        'name'=>$row['name'],
        'email'=> $row['email'],
        'score'=>$row['score'],
        'chance'=>$row['chance'],
        'level'=>$row['level']
    ) );
}

echo json_encode( array( 'result'=>$result ) );
mysqli_close( $con );
?>