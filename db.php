<?php
$conn = new mysqli("localhost", "root", "", "url_shortener");

if ($conn->connect_error) {
    $error = "Connection failed: " . $conn->connect_error;
} else {
    $success = "Database connected successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Shortener</title>
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Database Connection Status</h2>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <?php if (isset($success)) { ?>
            <div class="alert alert-success">
                <?php echo $success; ?>
            </div>
        <?php } ?>

    </div>
</div>

</body>
</html>