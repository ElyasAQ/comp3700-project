<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $occasion = $_POST['occasion'] ?? '';
    $scent_family = $_POST['scent_family'] ?? [];
    $intensity = $_POST['intensity'] ?? '';
    $budget = $_POST['budget'] ?? 30;
    $season = $_POST['season'] ?? '';
    $notes = $_POST['notes'] ?? '';
    
    $families = is_array($scent_family) ? implode(', ', $scent_family) : $scent_family;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scent Quiz Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2>Scent Quiz Submitted!</h2>
                <table class="table">
                    <tr><th>Occasion:</th><td><?php echo htmlspecialchars($occasion); ?></td></tr>
                    <tr><th>Scent Families:</th><td><?php echo htmlspecialchars($families); ?></td></tr>
                    <tr><th>Intensity:</th><td><?php echo htmlspecialchars($intensity); ?></td></tr>
                    <tr><th>Budget:</th><td><?php echo htmlspecialchars($budget); ?> OMR</td></tr>
                    <tr><th>Season:</th><td><?php echo htmlspecialchars($season); ?></td></tr>
                </table>
                <a href="../account.html" class="btn btn-primary">Back to Account</a>
            </div>
        </div>
    </div>
</body>
</html>