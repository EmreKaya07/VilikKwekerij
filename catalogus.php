<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vilik Kwekerij</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="Javascript/script.js"></script>
</head>

<body>
    <header>
       <div class="container">
           <h1>Vilik Kwekerij</h1>
           <nav>
               <ul>
                   <li><a href="index.php">Home</a></li>
                   <li><a href="catalogus.php"><b>Catalogus</b></a></li>
                   <li><a href="contact.php">Contact</a></li>
                   <?php
                   session_start();
                   // Is de gebruiker ingelogd?
                   if (isset($_SESSION['user'])) {
                       // Ja = volgende header menu item is "uitloggen"
                       echo '<li><a href="logout.php">Uitloggen</a></li>';
                   } else {
                       // Nee = volgende header menu item is "inloggen"
                       echo '<li><a href="login.php">Inloggen</a></li>';
                   }
                   ?>
               </ul>
           </nav>
       </div>
   </header>

    <main>
        <div class="image-grid">
            <h2>Meest Populair</h2>
            <div class="image-row">
                <div class="image-container">
                    <img src="/images/1005-iris.jpg" alt="Image 1">
                    <p>Hong Kong</p>
                </div>
                <div class="image-container">
                    <img src="/images/1006-iris.jpg" alt="Image 2">
                    <p>Casablanca</p>
                </div>
                <div class="image-container">
                    <img src="/images/Apollo-iris.jpg" alt="Image 3">
                    <p>Apollo</p>
                </div>
                <div class="image-container">
                    <img src="/images/Liva-iris.jpg" alt="Image 4">
                    <p>Iris Nassau</p>
                </div>
            </div>
            <h2>Kleurrijke Klassiekers</h2>
            <div class="image-row">
                <div class="image-container">
                    <img src="/images/Blue-magic.jpg" alt="Image 4">
                    <p>Blue Magic</p>
                </div>
                <div class="image-container">
                    <img src="/images/Purples-iris.jpg" alt="Image 4">
                    <p>Purple Sensation</p>
                </div>
                <div class="image-container">
                    <img src="/images/Goldenb-iris.jpg" alt="Image 3">
                    <p>Golden Beauty</p>
                </div>
                <div class="image-container">
                    <img src="/images/Profb-iris.jpg" alt="Image 3">
                    <p>Prof Blauw</p>
                </div>
            </div>
            <h2>Nieuwkomers</h2>
            <div class="image-row">
                <div class="image-container">
                    <img src="/images/Chopin-iris.jpg" alt="Image 2">
                    <p>Chopin</p>
                </div>
                <div class="image-container">
                    <img src="/images/Ce%CC%81ladon-iris.jpg" alt="Image 1">
                    <p>Céladon</p>
                </div>
                <div class="image-container">
                    <img src="/images/Magenta-iris.jpg" alt="Image 1">
                    <p>Magenta</p>
                </div>
                <div class="image-container">
                    <img src="/images/Misssgn-iris.jpg" alt="Image 2">
                    <p>Miss Saigon</p>
                </div>
            </div>
            <h2>Kweker's Favoriet</h2>
            <div class="image-row">
                <div class="image-container">
                    <img src="/images/Sapphire-iris.jpg" alt="Image 1">
                    <p>Sapphire</p>
                </div>
                <div class="image-container">
                    <img src="/images/Scarlett-Exclusive-iris.jpg" alt="Image 2">
                    <p>Scarlett Exclusive</p>
                </div>
                <div class="image-container">
                    <img src="/images/Sunshine-iris.jpg" alt="Image 3">
                    <p>Sun Shine</p>
                </div>
                <div class="image-container">
                    <img src="/images/Val-iris.jpg" alt="Image 4">
                    <p>Valentine</p>
                </div>
            </div>
        </div>
    </main> 

    <!-- Gewoon wat ruimte maken tussen de <main> sectie en de footer. Ik gebruik hier normaal <br> voor maar het is te lelijk... -->
 <div style="margin-top:75px; margin-bottom:5px"></div>

    <footer class="footer">
        <p>&copy; 2024 Vilik Kwekerij. All rights reserved.</p>
    </footer>

</body>

</html>