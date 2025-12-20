<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['productName'] ?? '';
    $price = $_POST['productPrice'] ?? 0;
    $family = $_POST['productFamily'] ?? '';
    $longevity = $_POST['productLongevity'] ?? '';
    $best_for = $_POST['productBestFor'] ?? '';
    $description = $_POST['productDescription'] ?? '';
    $image = $_POST['productImage'] ?? '';
    
    $sql = "INSERT INTO products (name, price, family, longevity, best_for, description, image_url) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $price, $family, $longevity, $best_for, $description, $image]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Added</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Product Added Successfully!</h2>
                <table class="table">
                    <tr><th>Name:</th><td><?php echo htmlspecialchars($name); ?></td></tr>
                    <tr><th>Price:</th><td><?php echo htmlspecialchars($price); ?> OMR</td></tr>
                    <tr><th>Family:</th><td><?php echo htmlspecialchars($family); ?></td></tr>
                </table>
                <a href="../shop.html" class="btn btn-primary">Back to Shop</a>
            </div>
        </div>
    </div>
</body>
</html>