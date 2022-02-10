<?php
require_once( 'config.php' );

$sql = 'select * from cities WHERE prov_id = 35';

$r = mysqli_query( $con, $sql );

$result = array();
$location = array();

while( $row = mysqli_fetch_array( $r ) )
 {
    array_push( $result, array(
        'id'=>$row['id'],
        'prov_id'=>$row['prov_id'],
        'city'=> $row['city']
    ) );
}

echo json_encode( array( 'result'=>$result ) );
mysqli_close( $con );
?>