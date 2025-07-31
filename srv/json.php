<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido"]);
    exit;
}

require_once __DIR__ . "/../lib/php/recuperaJson.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$json = recuperaJson();
$p1 = $json->p1;
$p2 = $json->p2;
$p3 = $json->p3;
$resultado =
 "{$p1} {$p2} {$p3}.";
devuelveJson($resultado);
