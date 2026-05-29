<?php
declare(strict_types=1);

$configPath = __DIR__ . '/config.php';
$schemaPath = __DIR__ . '/db/schema.sql';
$alreadyInstalled = file_exists($configPath);

$errors  = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$alreadyInstalled) {
    $dbHost = trim($_POST['db_host'] ?? 'localhost');
    $dbName = trim($_POST['db_name'] ?? '');
    $dbUser = trim($_POST['db_user'] ?? '');
    $dbPass = (string)($_POST['db_pass'] ?? '');

    if ($dbName === '' || $dbUser === '' || $dbPass === '') {
        $errors[] = 'All fields are required.';
    }

    if (!$errors) {
        try {
            $pdo = new PDO(
                "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4",
                $dbUser, $dbPass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            $errors[] = 'DB connection failed: ' . $e->getMessage();
        }
    }

    if (!$errors) {
        $schema = file_get_contents($schemaPath);
        if ($schema === false) {
            $errors[] = 'Could not read db/schema.sql';
        } else {
            try {
                $pdo->exec($schema);
            } catch (PDOException $e) {
                $errors[] = 'Schema execution failed: ' . $e->getMessage();
            }
        }
    }

    if (!$errors) {
        $configContent = "<?php\nreturn " . var_export([
            'db_host' => $dbHost,
            'db_name' => $dbName,
            'db_user' => $dbUser,
            'db_pass' => $dbPass,
        ], true) . ";\n";

        if (file_put_contents($configPath, $configContent) === false) {
            $errors[] = 'Could not write config.php (check directory permissions).';
        } else {
            chmod($configPath, 0600);
            $success = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Garden Planner — Setup</title>
<style>
  body { font: 15px/1.5 system-ui, sans-serif; max-width: 520px; margin: 3rem auto; padding: 0 1rem; color: #1a3a1a; }
  h1 { color: #2d6a2d; }
  .ok { background: #e8f5e8; border: 1px solid #2d6a2d; padding: 1rem; border-radius: 6px; }
  .err { background: #fdecea; border: 1px solid #c62828; padding: 0.6rem 1rem; border-radius: 6px; margin-bottom: 1rem; }
  label { display: block; margin-top: 1rem; font-weight: 600; }
  input { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; font: inherit; box-sizing: border-box; }
  button { margin-top: 1.5rem; padding: 0.6rem 1.2rem; background: #2d6a2d; color: white; border: none; border-radius: 4px; font: inherit; cursor: pointer; }
  button:hover { background: #1f4f1f; }
  code { background: #f4f4f4; padding: 0.1rem 0.3rem; border-radius: 3px; font-size: 0.9em; }
  .danger { background: #fff8e1; border-left: 4px solid #ff8f00; padding: 0.6rem 1rem; margin: 1rem 0; }
</style>
</head>
<body>

<h1>🌱 Garden Planner — Setup</h1>

<?php if ($alreadyInstalled): ?>
  <div class="ok">
    <strong>Already installed.</strong> <code>config.php</code> exists.<br>
    For security, <strong>delete this file</strong> (<code>bootstrap.php</code>) via File Manager or SFTP.<br>
    Then visit <a href="/">the planner</a>.
  </div>

<?php elseif ($success): ?>
  <div class="ok">
    <strong>✅ Setup complete.</strong> Schema created, <code>config.php</code> written.<br><br>
    <strong>Now do these two things:</strong>
    <ol>
      <li><strong>Delete <code>bootstrap.php</code></strong> via SiteGround File Manager. (Anyone who finds this URL could otherwise re-trigger setup.)</li>
      <li>Visit <a href="/">the planner</a> — checkbox state now persists to the database.</li>
    </ol>
  </div>

<?php else: ?>
  <p>One-time setup. Fill in your SiteGround MySQL credentials. After install, <strong>delete this file</strong>.</p>

  <div class="danger">
    <strong>⚠️ Security:</strong> This installer is unauthenticated. Anyone who can reach this URL can attempt setup. Run it now, then delete <code>bootstrap.php</code> immediately.
  </div>

  <?php foreach ($errors as $e): ?>
    <div class="err"><?= htmlspecialchars($e) ?></div>
  <?php endforeach; ?>

  <form method="POST" autocomplete="off">
    <label>DB host
      <input type="text" name="db_host" value="<?= htmlspecialchars($_POST['db_host'] ?? 'localhost') ?>" required>
    </label>
    <label>DB name
      <input type="text" name="db_name" value="<?= htmlspecialchars($_POST['db_name'] ?? '') ?>" required placeholder="dbjnxwauotrgiv">
    </label>
    <label>DB user
      <input type="text" name="db_user" value="<?= htmlspecialchars($_POST['db_user'] ?? '') ?>" required placeholder="uyp86ufa3xguf">
    </label>
    <label>DB password
      <input type="password" name="db_pass" required>
    </label>
    <button type="submit">Install</button>
  </form>
<?php endif; ?>

</body>
</html>
