<?php
$conn = mysqli_connect("localhost", "root", "", "url_shortener");

if (!$conn) {
    die("Database connection failed");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Shortener</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Database Connected ✅</h2>

        <form method="POST">
            <div class="mb-3">
                <input type="text" name="url" class="form-control" placeholder="Enter URL">
            </div>
            <button class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

</body>
</html>