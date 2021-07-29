<?php
if (!isset($_GET['debug'])) {
    ini_set('display_errors', 0);
}
require_once './lib/engine.php';
$engine = new Engine();
if (isset($_GET['term'])) {
    header('Content-Type: application/json');
    $res = $engine->suggest($_GET['term']);
    if ($res) {
        echo json_encode($res);
    }
}
exit;
