<?php
include "db.php";

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $sql = "SELECT long_url FROM urls WHERE short_code='$code'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Location: " . $row['long_url']);
        exit();
    } else {
        $error = "Invalid URL!";
    }
} else {
    $error = "No short code provided!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirect Error</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4 text-center">
        <h3 class="text-danger mb-3">Error</h3>
        <p class="mb-4"><?php echo $error; ?></p>
        <a href="index.php" class="btn btn-primary">Go Back</a>
    </div>
</div>

</body>
</html>