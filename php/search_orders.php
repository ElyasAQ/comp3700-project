<?php
require_once 'config/database.php';

$searchOrderId = $_GET['searchOrderId'] ?? '';
$searchStatus = $_GET['searchStatus'] ?? '';

$sql = "SELECT * FROM orders WHERE 1=1";
$params = [];

if (!empty($searchOrderId)) {
    $sql .= " AND order_number LIKE ?";
    $params[] = "%$searchOrderId%";
}

if (!empty($searchStatus)) {
    $sql .= " AND status = ?";
    $params[] = $searchStatus;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1>Order Search Results</h1>
        <p>Found <?php echo count($orders); ?> orders</p>
        
        <?php if(count($orders) > 0): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Date</th>
                    <th>Products</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                <tr>
                    <td><?php echo $order['order_number']; ?></td>
                    <td><?php echo $order['order_date']; ?></td>
                    <td><?php echo $order['products_summary']; ?></td>
                    <td><?php echo $order['total_amount']; ?> OMR</td>
                    <td>
                        <span class="badge bg-<?php 
                            echo $order['status'] == 'Delivered' ? 'success' : 
                                 ($order['status'] == 'Processing' ? 'warning' : 'primary'); 
                        ?>">
                            <?php echo $order['status']; ?>
                        </span>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <div class="alert alert-info">No orders found.</div>
        <?php endif; ?>
        
        <a href="../account.html" class="btn btn-primary">Back to Account</a>
    </div>
</body>
</html>