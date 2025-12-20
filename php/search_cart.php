<?php
session_start();
require_once 'config/database.php';

$searchProductName = $_GET['searchProductName'] ?? '';

$user_id = 1;

$sql = "SELECT ci.*, p.name 
        FROM cart_items ci 
        JOIN products p ON ci.product_id = p.product_id 
        WHERE ci.user_id = ?";
$params = [$user_id];

if (!empty($searchProductName)) {
    $sql .= " AND p.name LIKE ?";
    $params[] = "%$searchProductName%";
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1>Cart Search Results</h1>
        <p>Found <?php echo count($cartItems); ?> items</p>
        
        <?php if(count($cartItems) > 0): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                foreach($cartItems as $item): 
                    $subtotal = $item['quantity'] * $item['unit_price'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['size']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo $item['unit_price']; ?> OMR</td>
                    <td><?php echo $subtotal; ?> OMR</td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" class="text-end"><strong>Total:</strong></td>
                    <td><strong><?php echo $total; ?> OMR</strong></td>
                </tr>
            </tbody>
        </table>
        <?php else: ?>
        <div class="alert alert-info">No items found.</div>
        <?php endif; ?>
        
        <a href="../cart.html" class="btn btn-primary">Back to Cart</a>
    </div>
</body>
</html>