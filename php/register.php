<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $sql = "INSERT INTO users (full_name, email, phone) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $phone]);
    
    $user_id = $pdo->lastInsertId();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Registration Successful!</h2>
                <table class="table">
                    <tr><th>Name:</th><td><?php echo htmlspecialchars($name); ?></td></tr>
                    <tr><th>Email:</th><td><?php echo htmlspecialchars($email); ?></td></tr>
                    <tr><th>Phone:</th><td><?php echo htmlspecialchars($phone); ?></td></tr>
                    <tr><th>User ID:</th><td>NAS-<?php echo $user_id; ?></td></tr>
                </table>
                <a href="../account.html" class="btn btn-primary">Back to Account</a>
            </div>
        </div>
    </div>
</body>
</html>