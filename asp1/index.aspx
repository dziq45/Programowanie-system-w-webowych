<%@ Page Language="C#" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="Default2" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link rel="stylesheet" href="StyleSheet.css" />
</head>
<body>
    <nav>
        <ul class="main-menu" type="None">
            <li class="menu"><a class="link1" href="#">Menu</a></li>
          <li class="item"><a class="link1" href="index.aspx">Strona główna</a></li>
          <li class="item"><a class="link1" href="edukacja.html">Edukacja</a></li>
          <li class="item"><a class="link1" href="form.aspx">Kup bilet</a></li>
          <li class="item dropdown">
            <a class="link1"href="wystawy.html">Wystawy</a>
            <ul class="submenu">
              <li class="item2"><a href="stratyWojenne.html">Straty wojenne</a></li>
              <li class="item2"><a href="seanseMultimedialne.html">Seanse multimedialne</a></li>
              <li class="item2"><a class="dropdown2" href="projektUnijny.html">Projekt unijny</a>
                <ul class="submenu">
                  <li class="item3"> <a href="projektUnijny.html#cel">Cel</a></li>
                  <li class="item3"> <a href="projektUnijny.html#opis">Opis</a></li>
                  <li class="item3"><a href="projektUnijny.html#finansowanie">Finansowanie</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="item">
            <a class="link1" href="mailto:piotr.papriko@gmail.com?subject=Moja_opinia"
              >Prześlij opinię</a
            >
          </li>
          <li class="item"><a class="link1" href="ankieta.html">Ankieta</a></li>
          <li class="item"><a class="link1" href="about.aspx">O nas</a></li>
          <li class="item"><a class="link1" href="indexx.php">Zaloguj</a></li>
        </ul>
      </nav>
      <div id="name-info">
        <h1>MUZEUM NARODOWE WE WROCŁAWIU</h1>
      </div>
    <table class="maintable">
      <tr>
        <th>
          <a href="stratyWojenne.html">
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
          <a href="seanseMultimedialne.html">
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
          <a href="projektUnijny.html">
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
                <a href="opowisci.html">
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
                <a href="zakupBiletu.html">
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
