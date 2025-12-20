<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = $_POST['orderId'] ?? '';
    $orderDate = $_POST['orderDate'] ?? '';
    $orderProducts = $_POST['orderProducts'] ?? '';
    $orderTotal = $_POST['orderTotal'] ?? 0;
    $orderStatus = $_POST['orderStatus'] ?? 'Processing';
    
    $dateFormatted = date('M d, Y', strtotime($orderDate));
    
    $sql = "INSERT INTO orders (order_number, order_date, products_summary, total_amount, status) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$orderId, $orderDate, $orderProducts, $orderTotal, $orderStatus]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Added</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Order Added Successfully!</h2>
                <table class="table">
                    <tr><th>Order ID:</th><td><?php echo htmlspecialchars($orderId); ?></td></tr>
                    <tr><th>Date:</th><td><?php echo htmlspecialchars($dateFormatted); ?></td></tr>
                    <tr><th>Products:</th><td><?php echo htmlspecialchars($orderProducts); ?></td></tr>
                    <tr><th>Total:</th><td><?php echo htmlspecialchars($orderTotal); ?> OMR</td></tr>
                    <tr><th>Status:</th><td><?php echo htmlspecialchars($orderStatus); ?></td></tr>
                </table>
                <a href="../account.html" class="btn btn-primary">Back to Account</a>
            </div>
        </div>
    </div>
</body>
</html>