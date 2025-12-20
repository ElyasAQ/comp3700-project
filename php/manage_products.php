<?php
require_once 'config/database.php';

// Handle delete
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM products WHERE product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$delete_id]);
}

// Get all products
$sql = "SELECT * FROM products ORDER BY product_id DESC";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Manage Products</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h5>Product Operations</h5>
                <a href="../shop.html" class="btn btn-primary">Add New Product (Form)</a>
                <a href="search_products.php" class="btn btn-info">Search Products</a>
            </div>
        </div>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Family</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product['product_id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?> OMR</td>
                    <td><?php echo $product['family']; ?></td>
                    <td><?php echo $product['stock_quantity']; ?></td>
                    <td>
                        <a href="update_product.php?id=<?php echo $product['product_id']; ?>" class="btn btn-warning btn-sm">Update</a>
                        <a href="?delete_id=<?php echo $product['product_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>