<?php
header('Content-Type: application/json');

$results = ['xyz','def','ret'];

$arr = [];

$urlContent = $_GET['ticketNumber'];

$URL = "www.hima.com".$urlContent;
$arr['URL'] = $URL;

echo json_encode($arr);


?>