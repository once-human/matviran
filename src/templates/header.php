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
                <li class="dropdown">
                    <a href="#" class="nav-item">About Us <span class="dropdown-icon">&#9662;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/our-story" class="nav-item">Our Story</a></li>
                        <li><a href="/team" class="nav-item">Meet the Team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-item">Contact <span class="dropdown-icon">&#9662;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/faqs" class="nav-item">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Navbar End -->
    </header>
    <script src="/public/assets/js/header.js"></script> <!-- Header JS -->
</body>

</html>
