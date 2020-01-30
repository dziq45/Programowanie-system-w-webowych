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
      <h1>Opowieści spoza obrazów. Fotografie Ewy Martyniszyn</h1>
      <h2>5 października – 29 grudnia 2019</h2>
      <h3>Kuratorka wystawy: Dorota Jasnowska</h3>
      <div id="picture-stories">
          <img src="images/fotografia.jpg" />
      </div>
      <p>
        <b>
          Wystawa jest podsumowaniem projektu artystycznego realizowanego przez
          artystkę w latach 2005–2006 na terenie województwa opolskiego,
          dolnośląskiego, śląskiego oraz na Ukrainie. Powstało wtedy 44
          fotografii czarno-białych i barwnych oraz około 50 reprodukcji tzw.
          monideł, czyli ręcznie podkolorowanych lub preparowanych na bazie
          fotografii portretów o tematyce ślubnej, wojskowej czy komunijnej.
        </b>
      </p>
      <p>
        Projekt prowadzony był przez autorkę dwutorowo: z jednej strony
        reprodukowała tradycyjne monidła znajdujące się w prywatnych kolekcjach,
        równolegle nagrywając wypowiedzi osób występujących na portretach lub
        też ich bliskich, z drugiej strony fotografowała tę samą osobę,
        trzymającą portret lub ustawioną w jego pobliżu. Wystawa ukazuje
        kontrast pomiędzy wyidealizowanymi wizerunkami osób przedstawianych na
        monidłach a meandrami niedoskonałości życia człowieka. Celem artystki
        było ocalenie jednostkowych ludzkich istnień od zapomnienia, ale także
        ratowanie monideł od zniszczenia oraz przywrócenie im ważności i uwagi.
        Tytułowe „Opowieści spoza obrazów” dopełniają fotografie – zarówno te o
        charakterze dokumentalnym, wykonane w konwencji „Zapisu socjologicznego”
        Zofii Rydet, w którym portretowani patrzą prosto w obiektyw, jak i
        spreparowane monidła, ujawniając historie życia. Ewa Martyniszyn,
        absolwentka Akademii Sztuk Pięknych w Poznaniu, asystentka w Katedrze
        Sztuki Mediów Akademii Sztuk Pięknych im. E. Gepperta we Wrocławiu.
        Brała udział w licznych wystawach w kraju i za granicą. Ma na swoim
        koncie publikacje w książkach i czasopismach poświęconych sztuce. Od
        2004 r. zajmuje się tematyką monideł, pisząc o nich, kolekcjonując je
        oraz tworząc własne, autorskie monidła w Pracowni Fotografii i Monideł.
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