<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = $_POST['remember'] ?? '';
    
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Login <?php echo $user ? 'Successful' : 'Failed'; ?></h2>
                <?php if($user): ?>
                <p>Welcome back, <?php echo htmlspecialchars($user['full_name']); ?>!</p>
                <table class="table">
                    <tr><th>Email:</th><td><?php echo htmlspecialchars($user['email']); ?></td></tr>
                    <tr><th>Phone:</th><td><?php echo htmlspecialchars($user['phone']); ?></td></tr>
                </table>
                <?php else: ?>
                <p>Invalid email or password.</p>
                <?php endif; ?>
                <a href="../account.html" class="btn btn-primary">Back to Account</a>
            </div>
        </div>
    </div>
</body>
</html>