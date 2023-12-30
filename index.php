<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>

<body>

    <h2>URL Shortener</h2>

    <form action="shortener.php" method="post">
        <label for="originalUrl">Enter URL:</label>
        <input type="text" id="originalUrl" name="originalUrl" required>
        <button type="submit">Shorten URL</button>
    </form>

    <?php
    if (isset($_GET['shortenedUrl'])) {
        echo '<p>Shortened URL: <a href="' . $_GET['shortenedUrl'] . '" target="_blank">' . $_GET['shortenedUrl'] . '</a></p>';
    }
    ?>

</body>

</html>