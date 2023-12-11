<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <title>Portfolio</title>
</head>

<body>
    <div class="main-container">
        <header class="header">
            <a href="" class="logo">Dean Blok</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="#work">Home</a></li>
                <li><a href="#about">Projecten</a></li>
                <li><a href="#careers">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </header>
        <!-- Mainpage -->
        <div class="mainpage-container">
            <div class="main-left">
                <div class="main-left-container">
                    <h2 class="color-purple">Dean Blok.</h2>
                    <h2 class="color-purple">Webdevelopment.</h2>
                    <div class="animation-container">
                        <h2 data-text="Portfolio." class="h2-animate">Portfolio.</h2>
                    </div>
                </div>
            </div>
            <div class="main-right">
                <img class="main-right-img" src="{{ asset('img/browser-card.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="projects-container">
    <div class="projects-animation-container">
        
    </div>

    </div>
</body>

</html>