<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apskati Latviju</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<?php
session_start();
?>


<body>
    <header>
        <div class="logo"> <a href="./Sākums.php#home"> <img src="images/AL-logo.png" style="height: 70px; width: 120px;"></a></div>
        <nav class="nav">
            <ul>
                <li><a href="./Sākums.php#home">Sākums</a></li>
                <li><a href="./Sākums.php#news">Jaunumi</a></li>
                <li><a href="./Sākums.php#celojumi">Ceļojumi/Vakances</a></li>
                <li><a href="./Sākums.php#pieteikties">Pieteikties</a></li>
                <li><a href="./Sākums.php#parmums">Par Mums</a></li>
                <li><a href="./login.php"><i class="far fa-user"></i></a></li>
          
                  <?php
                 if(isset($_SESSION['lietotajvards'])): ?>
                  <li><a href="profils.php"><i class="fa fa-user-circle"></i></a></li>
                <?php endif; ?>

                <?php
                if(isset($_SESSION['lietotajvards'])){ 
                  $is_admin = $_SESSION['irAdmins'];
                  if($is_admin){
                    echo "
                  <li><a href='moderatori.php'>Moderatori</a></li>
                  ";
                  }
                }?>
                <?php
                 if(isset($_SESSION['lietotajvards'])): ?>
                  <li><a href="logout.php">Izlogoties</a></li>
                <?php endif; ?>
                
            </ul>
        </nav>
    </header>

    <!-- SLIDESHOW -->
    <!-- Slideshow konteineris -->
    <sections id="home">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="Images/Briviba.jpg" width="100%" height="700px">

        </div>
        <div class="mySlides fade">

            <img src="Images/Usma.jpg" width="100%" height="700px">

        </div>
        <div class="mySlides fade">
            <img src="Images/Slideshow_1.jpg" width="100%" height="700px">

        </div>
        <div class="mySlides fade">

            <img src="Images/Slideshow_2.jpg" width="100%" height="700px">

        </div>
        <div class="mySlides fade">
            <img src="Images/Slideshow_3.jpg" width="100%" height="700px">

        </div>
        <div class="mySlides fade">

            <img src="Images/Slideshow_4.jpg" width="100%" height="700px">

        </div>

        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    <!-- SLIDESHOW BEIGAS -->

    <div class="container">
        <div class="box-container">
            <div class="box">
                <h4>Aktualitātes</h4>
                <p>Latvija pēdējos gados ir kļuvusi par arvien populārāku ceļojumu galamērķi, kas pazīstama ar savām satriecošajām dabas ainavām, bagāto kultūras mantojumu un rosīgām pilsētām. Apmeklētāji var baudīt dažādus piedzīvojumus, sākot ar burvīgo bruģakmens ieliņu un Rīgas vecpilsētas vēsturisko pieminekļu iepazīšanu, beidzot ar pārgājieniem gleznainajos Gaujas Nacionālā parka mežos vai peldēm Baltijas jūras kristāldzidrajos ūdeņos. Piekrastes pilsētas, piemēram, Liepāja un Ventspils, ir iecienītas arī ar savām skaistajām pludmalēm, kultūras objektiem un aktivitātēm brīvā dabā. Turklāt Latvija ir pazīstama ar savu garšīgo virtuvi, kurā tiek piedāvāti tradicionāli ēdieni, piemēram, pelēkie zirņi ar speķi, kūpinātas zivis un melnā maize. Ar savu unikālo vēstures, kultūras un dabas skaistuma sajaukumu Latvija piedāvā kaut ko ikvienam ceļotājam.</p>
            </div>

            <div class="box">
                <h4>Ceļojumi</h4>
                <p>Latvija ir skaista valsts, kas atrodas Eiropas Baltijas reģionā, un tā piedāvā unikālu dabas skaistuma, vēsturisku pieminekļu un mūsdienu apskates objektu sajaukumu, kas padara to par populāru ceļojumu galamērķi. Dažas no populārākajām vietām Latvijā ir galvaspilsēta Rīga, kas ir pazīstama ar savu skaisto arhitektūru, rosīgo naktsdzīvi un bagātīgo kultūras mantojumu. Citi populāri galamērķi ir piejūras kūrortpilsēta Jūrmala ar skaistajām pludmalēm un dzīvīgu atmosfēru, kā arī viduslaiku pilsēta Cēsis, kas ir slavena ar satriecošajām pilsdrupām un gleznainām ielām. Turklāt dabas mīļotājiem patiks apmeklēt Gaujas nacionālo parku, kas piedāvā elpu aizraujošas ainavas, pārgājienu takas un iespējas āra aktivitātēm, piemēram, smaiļošanai un slēpošanai. Kopumā Latvijai ir ko piedāvāt jebkura veida ceļotājiem, un tās unikālais vēstures, kultūras un dabas skaistuma sajaukums padara to par obligātu galamērķi ikvienam, kas apmeklē Baltijas reģionu.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Populāras apskates vietas Latvijā.</h3>
        <div class="box-container2">
            <div class="box2">
                <div class="box-image">
                    <img src="Images/Riga.jpeg" alt="riga" width="600px" height="300px">
                </div>
                <p>Rīga ir Latvijas galvaspilsēta un lielākā pilsēta, kas atrodas pie Daugavas. Tās vecpilsētā, kas ir iekļauta UNESCO Pasaules mantojuma sarakstā, ir satriecoša arhitektūra, bruģētas ielas un daudzi apskates objekti, piemēram, Rīgas Doms un Rīgas pils. Pilsēta piedāvā arī dzīvīgu mākslas un kultūras skatuvi, aizraujošu naktsdzīvi un gardus tradicionālos latviešu virtuves ēdienus, padarot to par tūristu iecienītu galamērķi.</p>
                <b>Rīga</b></a>
            </div>

            <div class="box2">
                <div class="box-image">
                    <img src="Images/Liepaja.jpg" alt="liepaja" width="600px" height="300px">
                </div>
                <p>Liepāja ir piekrastes pilsēta Latvijas rietumos, kas pazīstama ar garajām smilšu pludmalēm un kultūras objektiem. Liepājai, kurā dzīvo aptuveni 70 000 cilvēku, ir bagāta vēsture kā jūras ostai un jūras spēku bāzei. Apmeklētāji var baudīt vēsturiskas un modernas arhitektūras sajaukumu, kā arī kultūras objektus, piemēram, muzejus un mūzikas festivālus. Pilsēta ir arī iecienīts galamērķis ūdens sporta entuziastiem.</p>
                <b>Liepāja</b></a>
            </div>

            <div class="box2">
                <div class="box-image">
                    <img src="Images/Venstpils.jpg" alt="venstpils" width="600px" height="300px">
                </div>
                <p>Ventspils ir piekrastes pilsēta Latvijas rietumos, kas pazīstama ar burvīgajām pludmalēm, parkiem un kultūras objektiem. Ar aptuveni 40 000 iedzīvotāju tā ir nozīmīgs tūrisma un rūpniecības centrs. Apmeklētāji var baudīt vēsturisku un mūsdienu apskates objektu sajaukumu, tostarp Ventspils Olimpisko centru un Piedzīvojumu parku Tarzāns. Populāras ir aktivitātes brīvā dabā, piemēram, peldēšana, vindsērfings un pārgājieni, un pilsētā visu gadu notiek vairāki kultūras festivāli.</p>
                <b>Venstpils</b></a>
            </div>
        </div>
    </div>
    </sections>

    <section id="news">
  <div class="container">
    <div class="news-items">
      <div class="news-item">
        <div class="news-content">
          <h3>Latvijas kultūras svētki</h3>
          <p>Pievienojieties mums ikgadējos Latvijas kultūras svētkos, kuros skan mūzika, dejas un ēdieni no visas Latvijas. Šogad festivāls notiks 15.-17.jūlijā Rīgā. Nepalaidiet garām šos Latvijas kultūras svētkus!</p>
        </div>
      </div>
      <div class="news-item">
        <div class="news-content">
          <h3>Jaunā pārgājienu taka</h3>
          <p>Izpētiet Latvijas skaisto lauku ainavu mūsu jaunajā pārgājienu takā, no kuras paveras brīnišķīgs skats uz mežiem, ezeriem un kalniem. Taka ir piemērota visu līmeņu pārgājieniem un ir atvērta visu gadu. Plānojiet savu ceļojumu jau šodien!</p>
        </div>
      </div>
      <div class="news-item">
        <div class="news-content">
          <h3>Latvian Cuisine</h3>
          <p>Atklājiet gardās latviešu virtuves garšas, ko raksturo sātīga gaļa, svaigi dārzeņi un tradicionālās maizes. Izmēģiniet mūsu nacionālo ēdienu, pelēkos zirņus ar bekonu vai nogaršojiet kādu no mūsu slavenajām kūpinātajām zivīm. Jūs nebūsiet vīlušies!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer id="parmums">
    <div class="footer">
        <div class="row">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>

        <div class="row">
        Liepājas Valsts tehnikums / Roberts Alonderis & Uvis Uldis Rozentāls &copy; 2023
        </div>
    </div>
</footer>


<script src="script.js"></script>
</body>
    </html>
