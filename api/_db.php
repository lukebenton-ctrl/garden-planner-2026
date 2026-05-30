<?php
// Internal DB connection helper. Not directly accessible (see .htaccess).
declare(strict_types=1);

function db(): PDO {
    static $pdo = null;
    if ($pdo !== null) return $pdo;

    $configPath = __DIR__ . '/../config.php';
    if (!file_exists($configPath)) {
        http_response_code(503);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Not installed. Visit /bootstrap.php to set up.']);
        exit;
    }
    $cfg = require $configPath;

    $dsn = sprintf(
        'mysql:host=%s;dbname=%s;charset=utf8mb4',
        $cfg['db_host'], $cfg['db_name']
    );
    try {
        $pdo = new PDO($dsn, $cfg['db_user'], $cfg['db_pass'], [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
    } catch (PDOException $e) {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'DB connection failed']);
        exit;
    }
    return $pdo;
}
