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
                    <a href="/our-story" class="nav-item">About Us <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 9l-6 6-6-6z"/></svg></a>
                    <ul class="dropdown-menu">
                        <li><a href="/our-story" class="nav-item">Our Story</a></li>
                        <li><a href="/team" class="nav-item">Meet the Team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="/contact" class="nav-item">Contact <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 9l-6 6-6-6z"/></svg></a>
                    <ul class="dropdown-menu">
                        <li><a href="/contact" class="nav-item">Contact</a></li>
                        <li><a href="/faqs" class="nav-item">FAQ</a></li>
                    </ul>
                </li>
                <!-- Updated Dashboard Button -->
                <li>
                    <div class="button--bubble__container">
                        <a href="https://client.matviran.com" class="button button--bubble">
                            Dashboard
                        </a>
                        <span class="button--bubble__effect-container">
                            <span class="circle top-left"></span>
                            <span class="circle top-left"></span>
                            <span class="circle top-left"></span>

                            <span class="button effect-button"></span>

                            <span class="circle bottom-right"></span>
                            <span class="circle bottom-right"></span>
                            <span class="circle bottom-right"></span>
                        </span>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Navbar End -->
    </header>
    <script src="/public/assets/js/header.js"></script> <!-- Header JS -->
</body>

</html>
