<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title> <!-- Dynamically set page title -->
    <link rel="stylesheet" href="/public/assets/css/header.css"> <!-- Header CSS -->
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="/home">Matviran</a>
            </div>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="/home">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/our-story">Our Story</a></li>
                <li><a href="/team">Team</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
                <li><a href="/faqs">FAQs</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <script src="/public/assets/js/header.js"></script> <!-- Header JS -->
</body>
</html>
