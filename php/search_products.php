<?php
require_once 'config/database.php';
require_once 'classes/Product.php';

$searchName = $_GET['searchName'] ?? '';
$searchFamily = $_GET['searchFamily'] ?? '';

$sql = "SELECT * FROM products WHERE 1=1";
$params = [];

if (!empty($searchName)) {
    $sql .= " AND name LIKE ?";
    $params[] = "%$searchName%";
}

if (!empty($searchFamily)) {
    $sql .= " AND family = ?";
    $params[] = $searchFamily;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$productObjects = [];
foreach($products as $row) {
    $productObjects[] = new Product(
        $row['product_id'],
        $row['name'],
        $row['price'],
        $row['family'],
        $row['longevity'],
        $row['best_for'],
        $row['description'],
        $row['image_url'],
        $row['stock_quantity']
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1>Product Search Results</h1>
        <p>Found <?php echo count($productObjects); ?> products</p>
        <?php echo displayProductsTable($productObjects); ?>
        <a href="../shop.html" class="btn btn-primary">Back to Shop</a>
    </div>
</body>
</html>