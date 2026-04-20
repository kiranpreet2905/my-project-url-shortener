<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">URL Shortener</h2>

        <form action="shorten.php" method="POST">
            <div class="mb-3">
                <input type="text" name="long_url" class="form-control" placeholder="Enter Long URL" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Shorten</button>
            </div>
        </form>

        <hr>

        <div class="text-center">
            <a href="list.php" class="btn btn-outline-secondary">View All URLs</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>