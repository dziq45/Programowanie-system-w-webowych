<?php

  include 'style/css_cookie_check.php';
  include 'isLoggedIn.php';
  session_start();
?>
<!DOCTYPE html>

<html lang="pl">
  <head>
    <meta charset="utf-8" />

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald" />
    <meta name="author" content="SitePoint" />

    <link rel="stylesheet" href="style/<?php echo $styleChoice?>/styles.css" type="text/css"/>
    <style>
      p {
        font-size:0.9em;
      }
      nav{
        margin:0;
        padding:0
      }
      .scalable{
        transition: transform .2s;
        
      }
      .scalable:hover{
        transform: scale(1.03);
      }
    </style>
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
      <div id="name-info">
        <h1>MUZEUM NARODOWE WE WROCŁAWIU</h1>
      </div>
	  <div id="style">
		<a href="choose_theme.php?choice=first">Pierwszy</a>
		<a href="choose_theme.php?choice=second">Drugi</a>
	  </div>
	<table class="maintable">
      <tr>
        <th>
          <a href="stratyWojenne.php">
            <img
              class="scalable"
              src="images/stratyWojenne.jpg "
              width="400px"
              height="200px"
              alt="Straty wojenne"
            />
            <h3>Programy badań strat wojennych</h3>
          </a>
        </th>
        <th rowspan="2">
          <a href="seanseMultimedialne.php">
            <img
              class="scalable"
              src="images/seanse.jpg "
              alt="Seanse multimedialne"
              width="520px"
              height="480px"
            />
            <h3>Zobacz, usłysz, dotknij – seanse multimedialne</h3>
          </a>
        </th>
      </tr>
      <tr>
        <th>
          <a href="projektUnijny.php">
            <img
              class="scalable"
              src="https://go.wroclaw.pl/api/download/img-3b62c3bf2df7bd081703575d464b209c/4-kopuly-sztuka-polska-002-jpg.jpg"
              width="400px"
              height="200px"
              alt="Projekt unijny"
            />
            <h3>Projekt unijny w Pawilonie Czterech Kopuł</h3>
          </a>
        </th>
      </tr>
      <tr>
        <td colspan="2">
          <table width="100%">
            <tr>
              <th>
                <a href="opowisci.php">
                  <img
                    class="scalable"
                    src="images/fotografia.jpg"
                    width="250px"
                    height="250px"
                    alt="Fotografia"
                  />
                  <h3>Fotografie Ewy Martyniszyn</h3>
                </a>
              </th>
              <th>
                <a href="zakupBiletu.php">
                  <img
                    class="scalable"
                    src="images/bilet.jpg"
                    width="250px"
                    height="250px"
                    alt="Fotografia"
                  />
                  <h3>Kup bilet</h3>
                </a>
              </th>
              <th>
                <a href="mailto:piotr.papriko@gmail.com?subject=Moja_opinia">
                  <img
                    class="scalable"
                    src="images/mail.jpg"
                    width="250px"
                    height="250px"
                    alt="mail"
                  />
                  <h3>Prześlij nam swoją opinię</h3>
                </a>
              </th>
            </tr>
          </table>
        </td>
      </tr>
    </table>
      <br>
      <br>
      <br>
      <br>
      <article id="opinie">
          <h2><b>OPINIE</b></h2>
          <p>Procent zadowolonych odwiedzających</p>
          <meter value="97" min="0" max="100" low="20" high="80" optimum="90">97</meter>
          <br><br>
          <h3>Marek B</h3>
          <p class="comment">
              <mark>Najciekawsza ekspozycja na pierwszym piętrze. Grobowce fantastycznie wyeksponowane z duchem czasu i oczekiwań turysty.  Sale po bokach mogłyby być przygotowane w podobnych klimatach, ale to pewnie wina braku funduszy.  Szkoda, bo bogactwo eksponatów w muzeum jest duże, ale sposób ekspozycji już nie podkreśla ich walorów. Za mało ciekawych opisów i faktów podanych w nowoczesny interaktywny sposób. Giną wśród tłoku niemych eksponatów. Niestety im wyżej na piętra tym gorzej. Na ostatnim piętrze folwark różności jak na giełdzie staroci.</mark><br><br>
          </p>
          <h3>Konrad Perlik</h3>
          <p class="comment">
              <mark>Pełno kultury i pięknych rzeźb oraz obrazów warto zatrzymać się na chwilę i podziwiać piękno sztuki. Polecam!!</mark><br><br>
          </p>
          <h3>Regina Phalange</h3>
          <p class="comment">
              <mark>Z zewnątrz budynek przepiękny, same ekspozycje ciekawe, trzy piętra wystaw wiec jest co zwiedzać:) polecam!</mark><br><br>
          </p>
      </article>
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