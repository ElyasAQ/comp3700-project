<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['productName'] ?? '';
    $size = $_POST['productSize'] ?? '';
    $quantity = $_POST['productQuantity'] ?? 1;
    $price = $_POST['productPrice'] ?? 0;
    
    $user_id = 1;
    
    $sql = "SELECT product_id FROM products WHERE name = ? LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$productName]);
    $product = $stmt->fetch();
    
    if ($product) {
        $sql = "INSERT INTO cart_items (user_id, product_id, size, quantity, unit_price) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $product['product_id'], $size, $quantity, $price]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart Updated</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Product Added to Cart!</h2>
                <table class="table">
                    <tr><th>Product:</th><td><?php echo htmlspecialchars($productName); ?></td></tr>
                    <tr><th>Size:</th><td><?php echo htmlspecialchars($size); ?></td></tr>
                    <tr><th>Quantity:</th><td><?php echo htmlspecialchars($quantity); ?></td></tr>
                    <tr><th>Price:</th><td><?php echo htmlspecialchars($price); ?> OMR</td></tr>
                </table>
                <a href="../cart.html" class="btn btn-primary">Back to Cart</a>
            </div>
        </div>
    </div>
</body>
</html>