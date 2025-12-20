<?php
require_once 'config/database.php';

$q = $_GET['q'] ?? '';
$family = $_GET['family'] ?? '';
$intensity = $_GET['intensity'] ?? '';
$max_price = $_GET['max_price'] ?? 50;

$sql = "SELECT * FROM products WHERE price <= ?";
$params = [$max_price];

if (!empty($q)) {
    $sql .= " AND name LIKE ?";
    $params[] = "%$q%";
}

if (!empty($family)) {
    $sql .= " AND family LIKE ?";
    $params[] = "%$family%";
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filtered Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1>Filtered Products</h1>
        <p>Max Price: <?php echo $max_price; ?> OMR</p>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Family</th>
                    <th>Best For</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?> OMR</td>
                    <td><?php echo $product['family']; ?></td>
                    <td><?php echo $product['best_for']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="../shop.html" class="btn btn-primary">Back to Shop</a>
    </div>
</body>
</html>