<?php

	include 'style/css_cookie_check.php';

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
          <li class="item"><a class="link1" href="ankieta.php">Ankieta</a></li>
          <li class="item"><a class="link1" href="onas.php">O nas</a></li>
          <li class="item"><a class="link1" href="loginform.php">Zaloguj</a></li>
        </ul>
      </nav>
        <center>
            <h2>Aby zwiedzanie dla odwiedzających nasze muzeum było jeszcze przyjemniejsze postanowiliśmy poznać trochę bardziej naszych turystów.<br>Poniżej znajduje się kilka pytań na które możesz odpowiedzieć...<br>Ankieta jest anonimowa.
            </h2>
        </center>
        <center>
        <form id="ankieta">\
            <p>
                <label>Imię:
                    <input type="text" placeholder="np. Jan" autofocus>
                </label>
            </p>
            <p>
                <label>Twój ulubiony kolor: 
                    <input type="color"/>
                </label>
            </p>
            <p>
                <label>W którym miesiącu planujesz odwiedzić nasze muzeum/ odwiedziłeś nasze muzeum:
                    <input type="month"/>
                </label>
            </p>
            <p>
                <label>Ile masz lat: 6
                    <input type="range" min="6" max="100" value="35"/> 100
                </label>
            </p>
            <p>
                <label>Miejsce zamieszkania:
                    <input type="search" placeholder="np. Wrocław"/>
                </label>
            </p>
            <p>
                <label>Twoja ulubiona piosenka to: (link z np. youtube)
                    <input type="url" placeholder="np. http://youtu.be/8ZGsrKniTW0"/>
                </label>
            </p>
            <p>
                <label for="lista-wystaw">Która z naszych obecnych wystaw podoba Ci się najbardziej?/ Którą z naszych wystaw najbardziej Cię interesuje?<br>
                    <input type="text" id="lista-wystaw" placeholder="Skarb Średzki" list="wystawy"/>
                    <datalist id="wystawy">
                        <option value="Skarb Średzki"></option>
                        <option value="Cudo-Twórcy"></option>
                        <option value="Sztuka polska XVII-XIX w."></option>
                        <option value="Sztuka śląska XIV-XVI w."></option>
                    </datalist>
                </label>
            </p>
            <p>
                <label>W jaki sposób dowiedziałeś się o naszym muzeum?
                    <select name="skad-info">
                        <option>Portale społecznościowe</option>
                        <option>Od znajomych</option>
                        <option>Reklamy na mieście</option>
                        <option>Inne</option>
                    </select>
                </label>
            </p>
            <input type="reset" value="Clear"/>
            <input type="submit" value="Submit" />
        </form>
        </center>
    </body>
</html>