<?php
declare(strict_types=1);
require __DIR__ . '/_db.php';

header('Content-Type: application/json');
header('Cache-Control: no-store');

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $rows = db()->query('SELECT state_key, state_value FROM app_state')->fetchAll();
    $out = [];
    foreach ($rows as $r) {
        $out[$r['state_key']] = json_decode($r['state_value'], true);
    }
    echo json_encode($out);
    exit;
}

if ($method === 'POST') {
    $body = json_decode(file_get_contents('php://input'), true);
    if (!is_array($body)) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON body']);
        exit;
    }

    // Bulk: {"t-1": true, "t-2": false}
    // Single: {"key": "t-1", "value": true}
    $updates = isset($body['key']) ? [$body['key'] => $body['value'] ?? null] : $body;

    $stmt = db()->prepare(
        'INSERT INTO app_state (state_key, state_value) VALUES (?, ?)
         ON DUPLICATE KEY UPDATE state_value = VALUES(state_value)'
    );

    foreach ($updates as $k => $v) {
        if (!is_string($k) || strlen($k) > 64 || $k === '') continue;
        $stmt->execute([$k, json_encode($v)]);
    }
    echo json_encode(['ok' => true, 'count' => count($updates)]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
