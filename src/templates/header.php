<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="header.scss">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/EasePack.min.js"></script>
</head>
<body>
    <header class="site-header">
        <nav class="navbar">
            <div class="logo">
                <a href="#">YourLogo</a>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Dashboard Button -->
                <li>
                    <div class="button--bubble__container">
                        <a href="#dashboard" class="button button--bubble">
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
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <script src="header.js"></script>
</body>
</html>
