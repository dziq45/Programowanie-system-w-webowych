<?php

	session_start();
  include 'style/css_cookie_check.php';
  include 'isLoggedIn.php';

	if(!isset($_SESSION['zalogowany'])) {
		header('Location: loginform.php');
		exit();
	};
	
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
      <h1 align="center">Zobacz, usłysz, dotknij – seanse multimedialne</h1>
      <h2>środa 15:00–16:00 | czwartek 15:00–16:00 | sobota 19:00–20:00</h2>
      <p>
        <b
          >Pawilon Czterech Kopuł zaprasza na wyjątkowy seans multimedialny – 3
          kwadranse ze sztuką. Daj się poprowadzić światłem, obrazem, dźwiękiem
          i słowem.</b
        >
      </p>
      <img src="images/seanse.jpg" />
      <p style="font-size:75%">
        W ramach Programu Operacyjnego Infrastruktura i Środowisko 2014–2020 w
        Pawilonie Czterech Kopuł Muzeum Sztuki Współczesnej powstał wyjątkowy
        pokaz multimedialny. Ścieżce wystawy towarzyszą teraz najnowsze
        technologie: doskonałe oświetlenie, projektory, nagłośnienie, które
        pozwalają na dotarcie do wszystkich obszarów percepcji widza.
      </p>
        <p style="font-size:15pt">
            Odbiór
            sztuki zostaje wzbogacony multimediami, poszczególne części widowiska
            prowadzą uwagę widza od mistrzów dwudziestolecia międzywojennego, przez
            spektakularne projekcje w przestrzeni kopuły wschodniej, bogaty
            komentarz wizualny i dźwiękowy przy dziełach Henryka Stażewskiego,
            Tadeusza Brzozowskiego, Zdzisława Beksińskiego, twórców sztuki materii,
            porywające animacje wokół sztuki Magdaleny Abakanowicz, aż po finał w
            atmosferze wrocławskiej Grupy Luxus. 
        </p>
        <p style="font-size:20px">
            Zobacz, usłysz, dotknij to
            wyjątkowa trasa zwiedzania dla tych, którzy ciekawi są rozszerzania
            granic sztuki i percepcji przy użyciu najnowszych technologii. 
        </p>
        <p style="font-size:0.9em">
            Wstęp z
            biletem za 25 zł (20 zł bilet ulgowy, 15 zł/os. rodzinny i grupowy). Kup
            bilet ➸ Prosimy o przybycie 15 minut przed rozpoczęciem seansu.
        </p>
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