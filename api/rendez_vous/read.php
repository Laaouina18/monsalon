<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
include_once '../../config/database.php';
include_once '../../model/post.php';
$database = new $database();
$db=$database->connect();
$rend = new Rendez_vous($db);
$result = $rend->read();
$num = $result->rowCount();
if($num>0){
    $rend_ar = array();
    $rend_ar['data'] = array();
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $title
    }
}