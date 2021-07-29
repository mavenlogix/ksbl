<?php
if (!isset($_GET['debug'])) {
    ini_set('display_errors', 0);
}
require_once './lib/engine.php';
$engine = new Engine();
if (isset($_POST['q'])) {
    header('Content-Type: application/json');
    $res = $engine->search($_POST['q'], $_POST['limit'] ? intval($_POST['limit']) : 10, $_POST['page'] ? intval($_POST['page']) : 0);
    if ($res) {
        echo json_encode(['success' => $res]);
    } else {
        echo json_encode(['error' => 'No result found']);
    }
}
exit;
