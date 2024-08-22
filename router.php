<?php
// router.php

// Get the request URI
$request = $_SERVER['REQUEST_URI'];

// Remove query parameters if any
$request = strtok($request, '?');

// Base directory where public files are located
$publicDir = __DIR__ . '/public';

// Function to handle 403 Forbidden redirect
function handle403() {
    http_response_code(403);
    require __DIR__ . '/src/templates/403.php'; 
    exit();
}

// Check if the request is for a directory without an index.php
function checkForIndexFile($path) {
    // If the path is a directory and does not have an index.php file
    if (is_dir($path) && !file_exists($path . '/index.php')) {
        handle403(); // Trigger 403 Forbidden
    }
}

// Normalize the request path
$normalizedPath = rtrim($publicDir . $request, '/');

// If the request is for the root, serve the home page
if ($request === '/' || $request === '/home') {
    require $publicDir . '/home.php';
    exit();
}

// If the request is for a directory, check for an index.php file
checkForIndexFile($normalizedPath);

// Route the request to the appropriate file if it exists
switch ($request) {
    case '/testimonials':
        require $publicDir . '/testimonials.php';
        break;
    case '/services':
        require $publicDir . '/services.php';
        break;
    case '/portfolio':
        require $publicDir . '/portfolio.php';
        break;
    case '/team':
        require $publicDir . '/team.php';
        break;
    case '/our-story':
        require $publicDir . '/our-story.php';
        break;
    case '/faqs':
        require $publicDir . '/faqs.php';
        break;
    case '/terms':
        require $publicDir . '/terms.php';
        break;
    default:
        // If the requested file exists, serve it; otherwise, show the 404 page
        $requestedFile = $normalizedPath . '.php';
        if (file_exists($requestedFile)) {
            require $requestedFile;
        } else {
            http_response_code(404);
            require __DIR__ . '/src/templates/404.php';
        }
        break;
}
