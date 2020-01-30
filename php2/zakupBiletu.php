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
    <script src="zakupBiletu.js"></script>
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
      <div class="ticketForm">
          <img id="ticketForm-image" src="images/ticketform.png">
          <form id="zakupBiletu" autocomplete="on">
              Imię:<br />
              <input type="text" name="name"/> (np. Piotr)
              <br />Nazwisko:<br />
                <input type="text" name="sname" required/> (np. Kowalski)
              <p>
                <label for="miesiac-urodzenia">Miesiąc urodzenia:
                    <input type="text" id="miesiac-urodzenia" placeholder="Skarb Średzki" list="miesiace"/>
                        <datalist id="miesiace">
                            <option value="Styczeń"></option>
                            <option value="Luty"></option>
                            <option value="Marzec"></option>
                            <option value="Kwiecień"></option>
                            <option value="Maj"></option>
                            <option value="Czerwiec"></option>
                            <option value="Lipiec"></option>
                            <option value="Sierpień"></option>
                            <option value="Wrzesień"></option>
                            <option value="Październik"></option>
                            <option value="Listopad"></option>
                            <option value="Grudzień"></option>
                        </datalist>
                </label>
              </p>
              <br />Adres e-mail:<br />
              <input id="emailaddress" onmousemove=focus() type="email" name="email" required/> (name@domain.com)
              <br />Telefon:<br />
              <input type="tel" onmousemove=blur() name="phone" pattern = "\(\d{3}\) +\d{3}-\d{4}"/> (***) ***-****
              <br />Typ biletu:<br />
              <input type="radio" name="typ" value="normalny" checked />Normalny<br />
              <input type="radio" name="typ" value="ulgowy" />Ulgowy<br />
              <br />Jeżeli ulgowy, to wybierz rodzaj ulgi<br />
              <select name="ulgi" form="zakupBiletu">
                <option>Brak</option>
                <optgroup label="Nauczanie">
                  <option>Dla dziecka do lat 4</option>
                  <option>Dzieci/młodzież</option>
                  <option>Studenci do lat 26/Doktoranci do lat 35</option>
                </optgroup>
                <optgroup label="Wojskowi">
                  <option>Weterani</option>
                  <option>Kombatanci</option>
                  <option>Żołnierze</option>
                  <option>Inwalidzi wojenni i wojskowi</option>
                </optgroup>
                <optgroup label="Seniorzy">
                  <option>Bilet dla seniora</option>
                </optgroup>
              </select>
              <br /><br />
              <input type="reset" value="Reset" onclick="return confirmation()" />
              <input id="submit" type="submit" value="Submit" onclick="return confirmation()" />
              <br /><br />
              <input type="checkbox" name="regulamin" />Oświadczam, że zapoznałem się z
              <a href="regulamin.pdf" download="regulamin.pdf">regulaminem</a> działania
              naszego serwisu. <br />
              <input type="checkbox" name="daneOsobowe" />Oświadczam, że zezwalam na
              przetwarzanie moich danych osobowych<br />
            </form>
            <br />Podziel się swoimi uwagami odnośnie działania naszego serwisu<br />
            <textarea
              name="uwagi"
              maxlength="200"
              rows="5"
              cols="60"
              form="zakupBiletu"
            >
        Miejsce na twoje uwagi :)</textarea
            >
      </div>

  </body>
</html>