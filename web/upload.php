<?php
include __dir__ . "/lib.php";
$data = $_POST['data'];

$id = sha1(microtime());
importImage($_POST['data'], __dir__ . "/images/" . $id . ".png");

header('Content-Type: application/json');
echo json_encode(['status' => 'ok', 'url' => "http://" . $_SERVER['SERVER_NAME'] . "/page.php?id=" . $id]);
