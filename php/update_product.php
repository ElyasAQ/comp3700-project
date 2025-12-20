<?php
require_once 'config/database.php';

// Get product to update
$product_id = $_GET['id'] ?? 0;
$message = '';

if ($product_id) {
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'] ?? 0;
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $family = $_POST['family'] ?? '';
    $stock = $_POST['stock'] ?? 0;
    
    $sql = "UPDATE products SET name = ?, price = ?, family = ?, stock_quantity = ? WHERE product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $price, $family, $stock, $product_id]);
    
    $message = "Product updated successfully!";
    
    // Refresh product data
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Update Product</h1>
        
        <?php if($message): ?>
        <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <?php if($product): ?>
        <div class="card">
            <div class="card-body">
                <form method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Price (OMR)</label>
                            <input type="number" class="form-control" name="price" step="0.01" value="<?php echo $product['price']; ?>" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Family</label>
                            <select class="form-select" name="family" required>
                                <option value="Oud / Woody" <?php echo $product['family'] == 'Oud / Woody' ? 'selected' : ''; ?>>Oud / Woody</option>
                                <option value="Floral" <?php echo $product['family'] == 'Floral' ? 'selected' : ''; ?>>Floral</option>
                                <option value="Amber" <?php echo $product['family'] == 'Amber' ? 'selected' : ''; ?>>Amber</option>
                                <option value="Musk" <?php echo $product['family'] == 'Musk' ? 'selected' : ''; ?>>Musk</option>
                                <option value="Fresh / Citrus" <?php echo $product['family'] == 'Fresh / Citrus' ? 'selected' : ''; ?>>Fresh / Citrus</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Stock Quantity</label>
                            <input type="number" class="form-control" name="stock" value="<?php echo $product['stock_quantity']; ?>" required>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                            <a href="manage_products.php" class="btn btn-secondary">Back to Products</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php else: ?>
        <div class="alert alert-warning">Product not found.</div>
        <?php endif; ?>
    </div>
</body>
</html>