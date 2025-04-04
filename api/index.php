<?php
header('Content-Type: text/html; charset=UTF-8');

// Dynamically resolve the path to the public/index.php file
$indexFilePath = realpath(__DIR__ . '/../public/index.php');

// Check if the file exists
if ($indexFilePath && file_exists($indexFilePath)) {
    // Include and execute the file
    require $indexFilePath;
} else {
    // Return a 404 error if the file is not found
    http_response_code(404);
    echo "<h1>404 Not Found</h1><p>The requested file could not be found.</p>";
}
?>
