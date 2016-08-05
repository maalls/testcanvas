<?php

function importImage($data, $filename) {

    $filteredData=substr($data, strpos($data, ",")+1);
    $unencodedData=base64_decode($filteredData);
    $fp = fopen($filename, 'wb');
    fwrite($fp, $unencodedData);
    fclose($fp);

}
