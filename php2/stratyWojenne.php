<?php

  include 'style/css_cookie_check.php';
  include 'isLoggedIn.php';


?>
<!DOCTYPE html>

<html lang="pl">
  <head>
    <meta charset="utf-8" />

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald" />
    <meta name="author" content="SitePoint" />

    <link rel="stylesheet" href="style/<?php echo $styleChoice?>/styles.css" type="text/css"/>
  </head>
  <body>
  <nav>
        <ul class="main-menu" type="None">
          <li class="menu"><a class="link1" href="#">Menu</a></li>
          <li class="item"><a class="link1" href="index.php">Strona główna</a></li>
          <li class="item"><a class="link1" href="edukacja.php">Edukacja</a></li>
          <li class="item"><a class="link1" href="zakupBiletu.php">Kup bilet</a></li>
          <li class="item dropdown">
            <a class="link1"href="wystawy.php">Wystawy</a>
            <ul class="submenu">
              <li class="item2"><a href="stratyWojenne.php">Straty wojenne</a></li>
              <li class="item2"><a href="seanseMultimedialne.php">Seanse multimedialne</a></li>
              <li class="item2"><a class="dropdown2" href="projektUnijny.php">Projekt unijny</a>
                <ul class="submenu">
                  <li class="item3"> <a href="projektUnijny.php#cel">Cel</a></li>
                  <li class="item3"> <a href="projektUnijny.php#opis">Opis</a></li>
                  <li class="item3"><a href="projektUnijny.php#finansowanie">Finansowanie</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="item">
            <a class="link1" href="mailto:piotr.papriko@gmail.com?subject=Moja_opinia"
              >Prześlij opinię</a
            >
          </li>
          <li class="item"><a class="link1" href="onas.php">O nas</a></li>
          <li class="item"><a class="link1" href="ankieta.php">Ankieta</a></li>
        </ul>
        <div class='loginContainer'>
            <?php
              if($loggedIn){
                echo 'Zalogowany jako ' .$_SESSION['user'];
                echo '<div class="butttonContainer"><a class="link1" href="registerForm.php">Zmień dane</a></div>';
                echo '<div class="butttonContainer"><a class="link1" href="logout.php">Wyloguj</a></div>';
              }
              else{
                echo '<div class="butttonContainer"><a class="link1" href="loginform.php">Logowanie</a></div>';
                echo '<div class="butttonContainer"><a class="link1" href="registerForm.php">Rejestracja</a></div>';
              }
            ?>
        </div>
      </nav>
    <div class="main-block">
      <h1>Programy badań strat wojennych</h1>
      <p>
        Muzeum Narodowe we Wrocławiu prowadzi badania na temat strat wojennych.
        W myśl idei kontynuowania gromadzenia, konserwowania, udostępniana i
        opracowywania naukowego zbiorów muzealnych regionu Muzeum realizuje
        obecnie dwa projekty dofinansowane ze środków Ministra Kultury i
        Dziedzictwa Narodowego.
      </p>
      <h2>
        1. Opracowanie archiwalnej dokumentacji dawnych wrocławskich muzeów
        związanej z dziełami sztuki średniowiecznej na Śląsku
      </h2>
      <p>
        W ramach tego programu Muzeum Narodowe we Wrocławiu w latach 2018–2019
        prowadzi kwerendy mające na celu skompletowanie i opracowanie
        rozproszonej archiwalnej dokumentacji dawnych wrocławskich muzeów oraz
        służb konserwatorskich związanych z dziełami sztuki średniowiecznej.
        Badaniami objęta jest związana ze Śląskiem drewniana i kamienna rzeźba
        romańska i gotycka oraz dzieła malarstwa tablicowego. Podczas
        prowadzonych badań szczególny nacisk kładziony jest na obiekty utracone.
      </p>
      <h2>
        2. Książ utracony, Książ ocalony – badanie strat wojennych kolekcji
        sztuki gromadzonej w Zamku Książ w Wałbrzychu
      </h2>
      <p>
        W czasie II wojny światowej w Książu znajdowały się tysiące dzieł
        sztuki. Były to przedmioty gromadzone od średniowiecza przez kolejne
        epoki – szczególnie bogato przedstawiały się zbiory barokowe: obrazy,
        rzeźby, rysunki, grafika etc. Niestety, po 1945 r. Zamek rozgrabiono, a
        powojenne losy kolekcji Hochbergów nigdy nie zostały dokładnie
        przebadane. Obecnie te niejednokrotnie bardzo cenne dzieła sztuki i
        rzemiosła artystycznego rozproszone są nie tylko na terenie Polski, ale
        również Niemiec, Austrii oraz Rosji i dawnych republik radzieckich.
      </p>
      <img src="images/ksiaz.jpg" />
    </div>
      <footer>
        <center>
            <p>Projektowanie systemów webowych</p>
            <p>
                Dominik Góral<br>
                Piotr Idzikowski
            </p>
            <p>&copy; 2019</p>
        </center>
      </footer>
  </body>
</html>
