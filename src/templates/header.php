<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title> <!-- Dynamically set page title -->
    <link rel="stylesheet" href="/public/assets/css/main.css"> <!-- Main CSS -->
    <link rel="stylesheet" href="/public/assets/css/header.css"> <!-- Header CSS -->
</head>

<body>
    <header>
        <!-- Navbar Start -->
        <nav class="navbar">
            <div class="logo">
                <a href="/home">Matviran</a>
            </div>
            <div class="menu-toggle" id="mobile-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="/home" class="nav-item">Home</a></li>
                <li><a href="/services" class="nav-item">Services</a></li>
                <li><a href="/portfolio" class="nav-item">Portfolio</a></li>
                <li><a href="/our-story" class="nav-item">Our Story</a></li>
                <li><a href="/team" class="nav-item">Team</a></li>
                <li><a href="/testimonials" class="nav-item">Testimonials</a></li>
                <li><a href="/faqs" class="nav-item">FAQs</a></li>
                <li><a href="/contact" class="nav-item">Contact</a></li>
            </ul>
        </nav>
        <!-- Navbar End -->
    </header>
    <script src="/public/assets/js/header.js"></script> <!-- Header JS -->
</body>

</html>