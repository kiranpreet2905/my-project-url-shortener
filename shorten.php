<?php
include "db.php";

$short_url = "";

if (isset($_POST['long_url'])) {
    $long_url = $_POST['long_url'];

    // Generate random short code
    $short_code = substr(md5(time()), 0, 6);

    // Insert into DB
    $sql = "INSERT INTO urls (long_url, short_code) 
            VALUES ('$long_url', '$short_code')";

    if ($conn->query($sql)) {
        $short_url = "http://localhost/url-shortener/redirect.php?code=$short_code";
    } else {
        $error = $conn->error;
    }
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
        <h2 class="text-center mb-4">URL Shortener</h2>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Enter Long URL</label>
                <input type="url" name="long_url" class="form-control" placeholder="https://example.com" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Shorten URL</button>
        </form>

        <?php if (!empty($short_url)): ?>
            <div class="alert alert-success mt-4">
                <strong>Short URL:</strong><br>
                <a href="<?php echo $short_url; ?>" target="_blank">
                    <?php echo $short_url; ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger mt-4">
                Error: <?php echo $error; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>