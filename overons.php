<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-informatie instellen -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/toy-shop.png" type="image/x-icon">
    
    <!-- Verwijzing naar externe CSS-stijlblad -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Titel van de pagina -->
    <title>Over Ons</title>

</head>
<body>

    <!-- Navigatiemenu -->
    <nav>
        <h1 class="logo">SJ</h1>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="speelgoed.php">Speelgoed</a></li>

            <div class="dropdown">

                <li class="dropbtn"><a href="overons.php#home">Over ons <span class="arrow-down">&#9660;</span></a></li>

                <div class="dropdown-content">
                    <li class="drop-li"><a href="overons.php#junior">Junior</a></li>
                    <li class="drop-li"><a href="overons.php#jandro">Jandro</a></li>
                    <li class="drop-li"><a href="overons.php#dean">Dean</a></li>
                </div>

            </div>
        </ul>
    </nav>

    <header class="home-over-ons" id="home">

        <h1 class="Over-ons-Title">Over Ons</h1>

    </header>

    <header class="junior-over-ons" id="junior">

        <h1 class="over-subtitel">Over Junior</h1>

        <div class="over-structuur">
            <img class="side-image" src="./assets/fluffy-toy-texture-close-up.jpg">
            <p class="over-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit odit quas, itaque pariatur sequi doloremque libero animi at iure, illum modi reprehenderit accusamus dignissimos veritatis tempore repudiandae necessitatibus asperiores ex.</p>
        </div>

    </header>

    <header class="jandro-over-ons" id="jandro">

        <h1 class="over-subtitel">Over Jandro</h1>

        <div class="over-structuur">
            <img class="side-image" src="./assets/jandro.jpg">
            <p class="over-text">
                Ik ben Jandro Thielman, en ik ben 17 jaar oud geboren op 24 september 2006. <br>
                Ik hou van programmeren, het maken van robots, leren en nog veel meer. <br>

            </p>
        </div>

    </header>

    <header class="dean-over-ons" id="dean">

        <h1 class="over-subtitel">Over Dean</h1>

        <div class="over-structuur">
            <img class="side-image" src="./assets/fluffy-toy-texture-close-up.jpg">
            <p class="over-text-black">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit odit quas, itaque pariatur sequi doloremque libero animi at iure, illum modi reprehenderit accusamus dignissimos veritatis tempore repudiandae necessitatibus asperiores ex.</p>
        </div>

    </header>

    <footer class="footer-alles">
        <h3 class="h3t">©Copyright 2024 Junior’s Toys. Alle rechten voorbehouden.</h3>
    </footer>
    
</body>
</html>


