<?php

include __dir__ . "/lib.php";

$data = file_get_contents(__dir__ . "/data.txt");

importImage($data, __dir__ . "/images/test.png");