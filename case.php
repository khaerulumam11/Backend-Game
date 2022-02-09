<?php
require_once( 'config.php' );

$sql = 'select * from tbl_case';

$r = mysqli_query( $con, $sql );

$result = array();
$location = array();

while( $row = mysqli_fetch_array( $r ) )
 {
    array_push( $result, array(
        'id_case'=>$row['id_case'],
        'subdistrict'=>$row['subdistrict'],
        'numberCase'=> $row['number_case'],
        'locationInfo'=> array( array(
            'lat'=>$row['lat1'],
            'lng'=>$row['lng1']
        ), array(
            'lat'=>$row['lat2'],
            'lng'=>$row['lng2']
        ), array(
            'lat'=>$row['lat3'],
            'lng'=>$row['lng3']
        ), array(
            'lat'=>$row['lat4'],
            'lng'=>$row['lng4']
        ) ),
        'temperature'=>$row['temperature'],
        'humidity'=>$row['humidity'],
        'rainfall'=>$row['rainfall'],
        'requireEdukatif'=>$row['require_edukatif'],
        'requirePreventif'=>$row['require_preventif'],
        'requireRecuratif'=>$row['require_recuratif']
    ) );
}

echo json_encode( array( 'result'=>$result ) );
mysqli_close( $con );
?>