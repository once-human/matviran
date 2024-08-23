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
        <nav class="navbar" aria-label="Main Navigation">
            <div class="logo">
                <a href="/home" aria-label="Matviran Homepage">Matviran</a>
            </div>
            <button class="menu-toggle" id="mobile-menu" aria-label="Toggle Menu" aria-expanded="false">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="nav-links" id="nav-links" role="menu">
                <li><a href="/home" class="nav-item" role="menuitem">Home</a></li>
                <li><a href="/services" class="nav-item" role="menuitem">Services</a></li>
                <li><a href="/portfolio" class="nav-item" role="menuitem">Portfolio</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-item" role="menuitem">About Us 
                        <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 9l-6 6-6-6z"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/our-story" class="nav-item" role="menuitem">Our Story</a></li>
                        <li><a href="/team" class="nav-item" role="menuitem">Meet the Team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-item" role="menuitem">Contact 
                        <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 9l-6 6-6-6z"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/faqs" class="nav-item" role="menuitem">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Navbar End -->
    </header>
    <script src="/public/assets/js/header.js"></script> <!-- Header JS -->
</body>

</html>
