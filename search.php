<?php 

require_once('Db.php');

$title = $_POST['title'];
$con = new Db();
$data = $con->searchData($title);
//var_dump($data);
echo json_encode($data, JSON_INVALID_UTF8_IGNORE);
