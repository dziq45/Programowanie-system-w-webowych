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
        <div class="container">
            <div class="container-column">
                <h3>Południowe Indie. Z Ćennaju do Koćinu przez Tamilnadu i Góry Kardamonowe do Kerali</h3>
                <h5>14.11, g. 16:00</h5>
                <p>
                    Wykład Magdaleny Szafkowskiej w ramach 
                    cyklu „Zwiedzamy świat z Muzeum”.<br><br>

                    Południowe Indie to jedne z najlepiej 
                    rozwiniętych regionów Subkontynentu. 
                    Ćennaj, główne miasto stanu Tamilnadu, 
                    chlubi się m.in. starymi świątyniami 
                    hinduistycznymi, ale także katolicką 
                    katedrą, w której podziemiach spoczywają 
                    szczątki św. Tomasza Apostoła. 
                    Pomiędzy Tamilnadu i Keralą biegnie 
                    łańcuch Gór Kardamonowych z 
                    miejscowością Kumily, w której 
                    odbywają się przedstawienia 
                    niezwykłego teatru Kathakali. 
                    Największym miastem regionu 
                    jest Koćin z portem dalekomorskim, 
                    XVI-wieczną dzielnicą żydowską, 
                    a także licznymi kościołami.<br><br>

                    Wstęp wolny.
                </p>
            </div>
            <div class="container-column">
                <h3>Józef Panek – mistrz ostrego cięcia</h3>
                <h5>16.11, g. 12:00</h5>
                <p>
                    Wykład Magdaleny Szafkowskiej w ramach 
                    cyklu „Mistrzowie grafiki”.<br><br>

                    Jerzy Panek to fenomenalny grafik, 
                    mistrz drzeworytu, w którym osiągnął 
                    niezwykłe efekty wyrafinowania, 
                    prostoty i syntezy. Oszczędne, 
                    wręcz surowe, a przez to pełne wyrazu 
                    i ekspresji prace dotyczą spraw jemu 
                    najbliższych: wiejskich zwierząt, 
                    prostych ludzi, jego samego. 
                    Nazywany „Wielkim Drwalem”, 
                    w twórczości stawał się bardziej 
                    stolarzem niż wysublimowanym artystą.<br><br>

                    Wstęp wolny.
                </p>
            </div>
            <div class="container-column">
                <h3>Żywioł powietrza</h3>
                <h5>16.11, g. 16:00</h5>
                <p>
                    Dwugodzinne warsztaty tańca intuicyjnego 
                    Barbary Przerwy dla dorosłych połączone z wykładem,
                    w ramach cyklu „Plastyka tańca”.<br><br>

                    Powietrze jest niezbędne do życia. 
                    Przestajesz oddychać – umierasz. W tańcu 
                    oddech jest niezmiernie ważny. 
                    Oddech to nasza siła. W malarstwie 
                    motyw powietrza nieodłącznie związany 
                    jest z wyobrażeniami wiatru, znajdziemy 
                    go pod postacią pięknych młodzieńców, 
                    sztormu na morzu, obłoków sunących po 
                    niebie – prób symbolicznego przedstawienia 
                    owego żywiołu jest wiele. Zapraszamy na 
                    wykład i warsztat, w czasie którego 
                    zatańczymy wiatry wiejące z czterech 
                    stron świata.<br><br>

                    Wstęp z biletem za 7 zł, obowiązują 
                    zapisy na tydzień przed wydarzeniem: 
                    tel. (71) 372 51 48 lub edukacja@mnwr.pl.
                </p>
            </div>
            <div class="container-column">
                <h3>Sztuka starożytnego Rzymu</h3>
                <h5>17.11, g. 13:00</h5>
                <p>
                    Wykład Grzegorza Wojturskiego w ramach 
                    cyklu „Kurs historii sztuki”<br><br>

                    Cywilizacja antycznego Rzymu do dziś 
                    imponuje obszarem wpływów, organizacją, 
                    techniką budowlaną i wojskową. 
                    Ekspansja Imperium Rzymskiego w Europie 
                    (I w. p.n.e. – II w. n.e.) rzutowała na 
                    kulturę całego regionu jeszcze długo 
                    po upadku mocarstwa, szczególnie w 
                    średniowieczu i renesansie.
                    Prelegent opowie o osiągnięciach sztuki 
                    antycznej, jej charakterystycznych formach 
                    i typowych treściach, uwzględniając zmiany, 
                    jakie następowały w miarę upływu stuleci 
                    antycznej Romy.<br><br>

                    Wstęp z biletem za 5 zł.
                </p>
            </div>
            <div class="container-column">
                <h3>Sztuka starożytnego Rzymu</h3>
                <h5>17.11, g. 13:00</h5>
                <p>
                    Wykład Grzegorza Wojturskiego w ramach 
                    cyklu „Kurs historii sztuki”<br><br>

                    Cywilizacja antycznego Rzymu do dziś 
                    imponuje obszarem wpływów, organizacją, 
                    techniką budowlaną i wojskową. 
                    Ekspansja Imperium Rzymskiego w Europie 
                    (I w. p.n.e. – II w. n.e.) rzutowała na 
                    kulturę całego regionu jeszcze długo 
                    po upadku mocarstwa, szczególnie w 
                    średniowieczu i renesansie.
                    Prelegent opowie o osiągnięciach sztuki 
                    antycznej, jej charakterystycznych formach 
                    i typowych treściach, uwzględniając zmiany, 
                    jakie następowały w miarę upływu stuleci 
                    antycznej Romy.<br><br>

                    Wstęp z biletem za 5 zł.
                </p>
            </div>
            <div class="container-column">
                <h3>Sztuka starożytnego Rzymu</h3>
                <h5>17.11, g. 13:00</h5>
                <p>
                    Wykład Grzegorza Wojturskiego w ramach 
                    cyklu „Kurs historii sztuki”<br><br>

                    Cywilizacja antycznego Rzymu do dziś 
                    imponuje obszarem wpływów, organizacją, 
                    techniką budowlaną i wojskową. 
                    Ekspansja Imperium Rzymskiego w Europie 
                    (I w. p.n.e. – II w. n.e.) rzutowała na 
                    kulturę całego regionu jeszcze długo 
                    po upadku mocarstwa, szczególnie w 
                    średniowieczu i renesansie.
                    Prelegent opowie o osiągnięciach sztuki 
                    antycznej, jej charakterystycznych formach 
                    i typowych treściach, uwzględniając zmiany, 
                    jakie następowały w miarę upływu stuleci 
                    antycznej Romy.<br><br>

                    Wstęp z biletem za 5 zł.
                </p>
            </div>
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