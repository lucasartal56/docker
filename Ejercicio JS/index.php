<?php
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header('Content-Type: application/json; charset=utf-8');

echo json_encode("Hola mundo desde Docker");

