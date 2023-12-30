<?php

session_start();

function generateShortCode($length = 6)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function shortenURL($url)
{
    $shortCode = generateShortCode();
    $data = [];

    // Check if the file exists and is not empty
    if (file_exists('shorturls.json') && filesize('shorturls.json') > 0) {
        $jsonContent = file_get_contents('shorturls.json');
        $data = json_decode($jsonContent, true);
    }

    while (array_key_exists($shortCode, $data)) {
        $shortCode = generateShortCode();
    }

    $data[$shortCode] = $url;
    file_put_contents('shorturls.json', json_encode($data));

    return $shortCode;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $originalURL = $_POST['originalUrl'];
    $shortenedURL = shortenURL($originalURL);

    // Output HTML with meta refresh tag for redirection
    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="refresh" content="0;url=' . $originalURL . '">
            <title>Redirecting...</title>
        </head>
        <body>
            <p>If you are not redirected, <a href="' . $originalURL . '">click here</a>.</p>
        </body>
        </html>';

    // Optionally, you can include a direct link to the original URL
    echo '<p>Shortened URL: <a href="' . $originalURL . '" target="_blank">' . $shortenedURL . '</a></p>';
    exit();
}
