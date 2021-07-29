<?php
if (!isset($_GET['debug'])) {
    ini_set('display_errors', 0);
}
require_once './lib/engine.php';
$engine = new Engine();
if (isset($_POST['q'])) {
    header('Content-Type: application/json');
    $res = $engine->suggest($_POST['q']);
    if ($res) {
        echo json_encode(['success' => $res]);
    } else {
        echo json_encode(['error' => 'No result found']);
    }
}
exit;
