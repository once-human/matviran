<?php
// router.php

// Get the request URI
$request = $_SERVER['REQUEST_URI'];

// Remove query parameters if any
$request = strtok($request, '?');

// Route the request to the appropriate file
switch ($request) {
    case '/':
    case '/home':
        require __DIR__ . '/public/home.php';
        break;
    case '/testimonials':
        require __DIR__ . '/public/testimonials.php';
        break;
    case '/services':
        require __DIR__ . '/public/services.php';
        break;
    case '/portfolio':
        require __DIR__ . '/public/portfolio.php';
        break;
    case '/team':
        require __DIR__ . '/public/team.php';
        break;
    case '/our-story':
        require __DIR__ . '/public/our-story.php';
        break;
    case '/faqs':
        require __DIR__ . '/public/faqs.php';
        break;
    case '/terms':
        require __DIR__ . '/public/terms.php';
        break;
    default:
        // Redirect to custom 404 page
        http_response_code(404);
        require __DIR__ . '/src/templates/404.php'; 
        break;
}
