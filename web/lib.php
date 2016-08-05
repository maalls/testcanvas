<?php

function importImage($data) {

    $filteredData=substr($data, strpos($data, ",")+1);
    $unencodedData=base64_decode($filteredData);
    $fp = fopen( __dir__ . '/images/test.png', 'wb' );
    fwrite($fp, $unencodedData);
    fclose($fp);

}
