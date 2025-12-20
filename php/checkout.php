<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $city = $_POST['city'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $payment = $_POST['payment'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Complete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Order Placed Successfully!</h2>
                <table class="table">
                    <tr><th>Name:</th><td><?php echo htmlspecialchars($name); ?></td></tr>
                    <tr><th>Email:</th><td><?php echo htmlspecialchars($email); ?></td></tr>
                    <tr><th>Address:</th><td><?php echo htmlspecialchars($address); ?></td></tr>
                    <tr><th>City:</th><td><?php echo htmlspecialchars($city); ?></td></tr>
                    <tr><th>Phone:</th><td><?php echo htmlspecialchars($phone); ?></td></tr>
                    <tr><th>Payment:</th><td><?php echo htmlspecialchars($payment); ?></td></tr>
                </table>
                <a href="../cart.html" class="btn btn-primary">Back to Cart</a>
            </div>
        </div>
    </div>
</body>
</html>