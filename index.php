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
                   <li><a href="index.php"><b>Home</b></a></li>
                   <li><a href="catalogus.php">Catalogus</a></li>
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
       <div class="container">
           <h2>Kwaliteit en Vriendschap in Bloei!</h2>
           <p>Vilik Kwekerij is een moderne bloemenkwekerij met een rijke geschiedenis en een passie voor het kweken van de mooiste bloemen. Al meer dan 20 jaar staan wij garant voor de hoogste kwaliteit bloemen, met een speciale focus op tulpen en rozen.</p>
           <div class="big-picture">
               <img src="https://kwekerijdegroot.nl/wp-content/uploads/2018/04/KWEKERIJ-DE-GROOT-MRT-2018_7170.jpg" alt="Big Picture">
           </div>
           <p>Vader Zeynel Çemiş startte in 2001 met het kweken van bloemen in het prachtige Anatolië. In de jaren die volgden heeft Zeynel bewezen een ware meester in bloemkweken te zijn. In 2016 voegde zoon Can zich bij het bedrijf. Door de gedrevenheid van Zeynel en de creatieve visie van Can is Vilik Kwekerij enorm gegroeid, van een bescheiden begin naar een bloeiende onderneming die nu miljoenen bloemen per jaar produceert.</p>
           <p>Vilik Kwekerij is een echt familiebedrijf dat veel waarde hecht aan persoonlijk contact. Zeynel en Can hebben dagelijks contact met hun klanten en beschouwen hun personeel als hun eigen familie. Deze persoonlijke benadering maakt ons uniek in de branche en zorgt voor een warme, vertrouwelijke relatie met onze klanten.</p>
           <p>Momenteel kweken wij bloemen op vijf verschillende locaties, waarbij onze hoofdlocatie zich in het hart van Turkije bevindt. Door onze bloemen in de wintermaanden in het milde klimaat van de Middellandse Zee te telen, zorgt Vilik Kwekerij voor een jaarrond aanbod van de meest diverse en prachtige bloemen.</p>
           <p>Vilik Kwekerij heeft als eerste bloemenkwekerij in Turkije geverfde producten op de markt gebracht. Momenteel hebben we zes geverfde soorten in ons assortiment: Mavi Mucize, Pembemsi, Mor Menekşe, Altın Güneş, Kırmızı Tutku en Gün Işığı. Deze innovatieve producten bieden onze klanten unieke en opvallende bloemen die elk arrangement bijzonder maken.</p>
           <p>Bij Vilik Kwekerij staat kwaliteit en vriendschap in bloei. We zijn trots op onze traditie en blijven ons inzetten voor het kweken van de mooiste bloemen met liefde en zorg.</p>
       </div>
   </main>

   <footer class="footer">
       <p>&copy; 2024 Vilik Kwekerij. All rights reserved.</p>
   </footer>
</body>

</html>