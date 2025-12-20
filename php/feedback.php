<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $age = $_POST['age'] ?? '';
    $products = $_POST['products'] ?? [];
    $satisfaction = $_POST['satisfaction'] ?? '';
    $likes = $_POST['likes'] ?? '';
    $improvements = $_POST['improvements'] ?? '';
    $recommend = $_POST['recommend'] ?? '';
    $newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';
    $contactOk = isset($_POST['contactOk']) ? 'Yes' : 'No';
    
    $productList = is_array($products) ? implode(', ', $products) : $products;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Submitted</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Thank You for Your Feedback!</h2>
                <table class="table">
                    <tr><th>Name:</th><td><?php echo htmlspecialchars($fullName); ?></td></tr>
                    <tr><th>Email:</th><td><?php echo htmlspecialchars($email); ?></td></tr>
                    <tr><th>Phone:</th><td><?php echo htmlspecialchars($phone); ?></td></tr>
                    <tr><th>Age:</th><td><?php echo htmlspecialchars($age); ?></td></tr>
                    <tr><th>Products Tried:</th><td><?php echo htmlspecialchars($productList); ?></td></tr>
                    <tr><th>Satisfaction:</th><td><?php echo htmlspecialchars($satisfaction); ?>/5</td></tr>
                    <tr><th>Recommend:</th><td><?php echo htmlspecialchars($recommend); ?></td></tr>
                    <tr><th>Newsletter:</th><td><?php echo $newsletter; ?></td></tr>
                    <tr><th>Contact OK:</th><td><?php echo $contactOk; ?></td></tr>
                </table>
                <a href="../questionnaire.html" class="btn btn-primary">Back to Questionnaire</a>
            </div>
        </div>
    </div>
</body>
</html>