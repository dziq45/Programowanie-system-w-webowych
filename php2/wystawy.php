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
            <section id="pazdziernik">
    
                <section id="skarb-sredzki">
    
                    <center><h2>Skarb Średzki. Tajemnice złotniczej pracowni</h2></center>
                    <div id="skarb-sredzki-image">
                        <center><img src="images/skarb_sredzki.jpg" width="600" alt="skarb-sredzki"></center>
                    </div>
                    
                        <p>
                            <b>Tradycyjnie przez trzy ostatnie miesiące roku prezentowany jest w Muzeum Narodowym we Wrocławiu jeden z najcenniejszych skarbów odnalezionych w Europie w XX w. – Skarb Średzki. Zwiedzający mogą obejrzeć bezcenne zabytki średniowiecznego złotnictwa z koroną królewską na czele.</b>
                        </p>
                        <p>
                            Tegoroczna prezentacja Skarbu poświęcona jest zagadnieniom średniowiecznej techniki złotniczej oraz tematyce konserwacji i rekonstrukcji zabytków skarbu, poczynając od rekonstrukcji wykonanej w 1996 r. w Krakowie, aż po ostatnie prace przeprowadzone w Muzeum Narodowym we Wrocławiu w 2018 r.
                            Po raz pierwszy ujawnione zostały tajniki warsztatu średniowiecznego artysty złotnika i współczesnego konserwatora!
    
                            Prezentowane na wystawie narzędzia stosowane były w złotniczej pracowni od wieków, najstarsze pochodzą z XII w.
                            Co ciekawe – wiele specjalistycznych narzędzi używanych przez złotników powstało w starożytności i w podobnej formie przetrwało do dzisiaj.
                            Do najważniejszych należą: puncyny, młotki różnych kształtów, rylce, pilniki, kształtowniki, formy odlewnicze, świdry, imadła i precyzyjne wagi. Stanowiskiem pracy był zawsze stół złotniczy wyposażony w drewniany klin – ułatwiający obróbkę małych elementów – i zawieszony poniżej fartuch do wyłapywania spadających fragmentów i opiłków, które po przetopieniu wykorzystywano w dalszej pracy.
    
                            Znaczna część tego typu narzędzi używana była w ubiegłych roku przez konserwatorów z Muzeum Narodowego we Wrocławiu przy pracach nad rekonstrukcją korony królewskiej ze Skarbu Średzkiego.<br><br><br>
                        </p>
                        <aside>
                            Rylec- narzędzie do rytowania używane w niektórych technikach graficznych. Składa się z ostrza stalowego o przekroju rombowym lub kwadratowym, osadzonego w uchwycie o zakończeniu półkulistym.
                        </aside>
                    
    
                </section>
            </section>
            
            <section id="wrzesien">
                <section id="cudo-tworcy">
    
                    <center><h2>,,Cudo-Twórcy" - III piętro</h2></center>
                    <center><img src="images/slonie.jpg" width="600" alt="slonie-cudo-tworcy"></center>
                
                        <p>
                            <b>Kunsztowna zbroja japońskiego samuraja, zegar słoneczny z busolą, kufer podróżny Louis Vuitton, sukienka z błękitnego jedwabiu, designerskie kryształowe kieliszki i kultowe radio „Szarotka”. Te i kilkaset innych przedmiotów składają się na niezwykłą wystawę zatytułowaną „Cudo-Twórcy”. Nowa ekspozycja stała, która w lipcu 2018 roku zagościła na trzecim piętrze Muzeum Narodowego we Wrocławiu, prezentuje trzy kolekcje: sztuki Bliskiego i Dalekiego Wschodu, rzemiosła artystycznego i kultury materialnej oraz współczesnej ceramiki i szkła artystycznego.</b>
                        </p>
                        <p>
                            „Cudo-Twórcy” to wystawa, która opowiada i prezentuje świat stworzony rękoma człowieka, powstały w jego umyśle i wyobraźni, a następnie w mistrzowski sposób zmaterializowany w przedmiocie użytkowym. To wyprawa w przeszłość, jednak z wyraźnymi odwołaniami do dobrze znanej codzienności.
    
                            Pierwsza część wystawy, poświęcona sztuce odległych azjatyckich kultur, wskazuje na europejską fascynację tymi obszarami, ich odkrywaniem i poznawaniem. Niegdyś służyły temu celowi kolekcje gromadzone przez podróżników czy też miłośników sztuki. Prezentowane na wystawie precjoza pochodzą m.in. z takich właśnie zasobów, w tym z przedwojennej kolekcji wrocławskiego Śląskiego Muzeum Rzemiosła Artystycznego i Starożytności. Oryginalne, misternie wykonane przedmioty kultu, jak na przykład rzeźbione wizerunki bóstw i opiekuńczych demonów, niezwykłej urody przedmioty codziennego użytku: inkrustowane przyborniki do kaligrafii, urzekające dekoracjami pojemniki z laki, barwne naczynia porcelanowe i wiele innych przedmiotów wprowadzają widzów w magiczny świat Orientu. Najcenniejszym zabytkiem tej części wystawy jest szkatułka na przybory do kaligrafii suzuribako. Jej twórca to najwybitniejszy reprezentant czołowej japońskiej szkoły mistrzów laki – Igarashi Doho I.
    
                            Druga część ekspozycji przenosi widza do Europy, będąc opowieścią o tym, jak człowiek zmieniał, udoskonalał i upiększał świat, w którym przyszło mu funkcjonować. Od pierwotnej potrzeby zaspakajania głodu, komunikowania się, poprzez strój, kształtowanie domowych wnętrz, po aktywności związane z pracą, ale i także z rozrywką. Zaprezentowane tu zostały najróżniejsze przedmioty – te zapomniane oraz takie, które do dziś pozostają w powszechnym użyciu. Zwiedzający mogą zatem prześledzić historyczne zmiany np. w przyrządach służących do pisania – od XVI-wiecznych wzorników do nauki kaligrafii, poprzez misternie zdobione porcelanowe kałamarze i gęsie pióra do popularnego dziś długopisu BIC. Wśród wystawionych zabytków znajdą się m.in.: meble, naczynia, stroje, zegary, witraże, przybory toaletowe, narzędzia używane w pracy, a także broń. Ukoronowaniem tej części wystawy jest niezwykła tkanina z „Historią Zbawienia” (jej fragment widnieje na górze strony), wykonana w XVIII w. przez anonimowego mistrza krawieckiego ze Zgorzelca, będąca zabytkiem światowej klasy i arcydziełem techniki intarsji (ang. patchwork).
    
                            Ostatni fragment „Cudo-Twórców” to prezentacja wybranych obiektów współczesnego szkła i ceramiki ze zbiorów Muzeum Narodowego we Wrocławiu, które posiada jedną z największych specjalistycznych kolekcji tego typu w Polsce. Pokazane tu są prace wybitnych polskich ceramików: powojennych prekursorów (Julia Kotarbińska i Rufin Kominek), wrocławskich mistrzyń dyscypliny (Krystyna Cybińska, Irena Lipska-Zworska, Anna Malicka-Zamorska, Bożena Sacharczuk), artystów z innych środowisk m.in. związanych z Gdańskiem i Warszawą. Spośród twórców szkła artystycznego można również podziwiać prace niezwykłego eksperymentatora i wizjonera szkła Henryka Albina Tomaszewskiego, a także takich twórców jak Ludwik Kiczura, Henryk Wilkowski, Małgorzata Dajewska, Kazimierz Pawlak, Beata Stankiewicz-Szczerbik oraz wybitnych artystów światowego szkła: Czesława Zubera, Marvina Lipofsky’ego, Pavla Hlavy i René Roubička.
    
                            W części poświęconej powojennemu wzornictwu przemysłowemu obejrzeć można naczynia dekoracyjne i użytkowe – znalazły się tu m.in. kolorowe szkła projektowane przez Zbigniewa Horbowego, Stefana Sadowskiego, Józefa Podlaska, szkła prasowane Eryki i Jana Drostów, szkła kryształowe Aleksandra i Reginy Puchałów, a także fajanse z Włocławka, porcelana doby polskiego „new look” lat 60. XX w. i bolesławiecka kamionka.
    
                            W ramach ekspozycji prezentowany jest również nagradzany na całym świecie instrument muzyczny Musicon, zaprojektowany przez absolwenta wrocławskiej ASP Kamila Laszuka, umożliwiający jednoczesne komponowanie i odgrywanie utworów. Mechanizm bazuje na rozwiązaniu znanym z pozytywki – wystające przyciski poruszają instrumenty, wytwarzając dźwięki. Każdy z 720 przycisków można dowolnie wciskać, tworząc nieskończone wzory, kompozycje i ich wariacje. Instrument jest niezwykle korzystny dla wszechstronnego rozwoju dzieci, zarówno psychicznego, jak i fizycznego. Nie trzeba dodawać, że komponowanie na nim to doskonała zabawa także dla dorosłych!
                        </p>
                        <aside>
                            Busola- urządzenie nawigacyjne służące do wyznaczania kierunku bieguna magnetycznego. Busola, podobnie jak kompas, jest wyposażona w igłę magnetyczną.
                        </aside>
                   
    
                </section>
    
                <section id="sztuka-polska-xvii-xix-w">
    
                    <center><h2>,,Sztuka polska XVII-XIX w." - II piętro</h2></center>
                    <center><img src="images/sztuka_polska.jpg" width="600" alt="sztuka-polska"></center>
                    
                        <p>
                            <b>W galerii sztuki polskiej na II piętrze Muzeum Narodowego we Wrocławiu prezentowane są przede wszystkim dzieła malarstwa, rzeźby oraz w mniejszym wyborze rzemiosło artystyczne od XVII do początków XX w. Są to prace polskich artystów oraz twórców zagranicznych działających na terenie dawnej Rzeczpospolitej.</b>
                        </p>
                        <p> 
                            Trzon kolekcji tworzą obrazy pochodzące z Galerii Narodowej Miasta Lwowa (287 obrazów i rysunków) oraz z kilku muzeów kijowskich (180 prac), które trafiły do wrocławskich zbiorów w ramach rewindykacji po 1945 r.
                            Ekspozycję wzbogacają przykłady polskiej rzeźby z XIX i początku XX w. oraz rzemiosło artystyczne. Na korytarzu prezentowana jest ponadto niewielka kolekcja portretów sarmackich.
    
                            Na wprost od wejścia do sali I znajduje się imponujących rozmiarów (169 × 271,5 cm) obraz Wjazd Jerzego Ossolińskiego do Rzymu w 1633 roku autorstwa pochodzącego z Wenecji Bernarda Bellotta zwanego Canaletto (1721–1780). Dzieło to powstało na zamówienie Józefa Ossolińskiego w 1779 r. i jest jednym z ostatnich dzieł wenecjanina, który działał w Warszawie na dworze króla Stanisława Augusta Poniatowskiego.
    
                            W kolejnej sali prezentowane jest malarstwo pierwszej połowy XIX w., można tu obejrzeć m.in. dwa obrazy Piotra Michałowskiego (1800–1855). Malarz ten należy do najwybitniejszych przedstawicieli polskiego romantyzmu. Jako wszechstronnie wykształcony artysta wyspecjalizował się w malowaniu portretów i przedstawianiu koni. Na obrazie Napoleon konno wydający rozkazy z l. 1835–1837 biały rumak cesarza Francuzów namalowany jest w bardzo ekspresyjny sposób. Wyraźna jest tu inspiracja dziełami francuskiego malarstwa romantycznego, które Michałowski poznał podczas swoich paryskich studiów.
    
                            Ważne miejsce na ekspozycji zajmują popularne w XIX w. akwarele takich artystów jak Juliusz Kossak, Jan Matejko, Artur Grottger i Piotr Michałowski. Ten pierwszy uznawany jest za najwybitniejszego polskiego akwarelistę tego czasu. W tej bardzo trudnej technice malarskiej kunsztownie przedstawiał wszelkie detale i niuanse kolorystyczne. Kossak także znakomicie malował konie, które na obrazie Targ koński na Pradze (1866) przedstawił w różnej kondycji, wieku i pozach.
    
                            Największy obraz prezentowany w Muzeum Narodowym we Wrocławiu to namalowane w 1893 r. przez Jana Matejkę (1838–1893) Śluby Jana Kazimierza (1893). Scena historyczna z czasów potopu szwedzkiego została ukazana na płótnie o imponujących rozmiarach 500 × 315 cm.
    
                            Chłopiec w słońcu to niewątpliwie jeden z najlepszych obrazów Aleksandra Gierymskiego (1850–1901), brata Maksymiliana. Dzieło powstało po 1893 r. po powrocie z pleneru w podkrakowskich Bronowicach, gdzie malarz gościł u Włodzimierza Tetmajera. Artysta pozostawał pod dużym wpływem francuskiego impresjonizmu, dlatego kluczowe funkcje pełniły u niego światło i kolor, traktowane jako czynniki formotwórcze dzieła.
    
                            Galerię malarstwa polskiego zamykają dzieła z przełomu XIX i XX w., wśród których warto zwrócić uwagę na obrazy Jacka Malczewskiego (1854–1929), najważniejszego przedstawiciela symbolizmu w sztuce polskiej. Namalowany w 1903 r. tryptyk Prawo – Ojczyzna – Sztuka to dzieło przesycone aluzjami i ukrytymi znaczeniami.
    
                            W osobnej sali galerii prezentowane są pastele i akwarele malarzy młodopolskich, a wśród nich trzy obrazy Stanisława Wyspiańskiego (1869–1907), jednego z najwybitniejszych i najbardziej wszechstronnych artystów polskich. Jeden z nich przedstawia córkę malarza Helenkę (1900). Wyspiański ukazał na nim głowę i częściowo ramiona pięcioletniej dziewczynki. Artysta wielokrotnie portretował swoje dzieci, w tym jedyną córkę.
    
                            W ostatniej sali poświęconej sztuce okresu Młodej Polski nie zabrakło dzieł wybitnych rzeźbiarzy. Podziwiać tu można utrzymane w secesyjnej stylistyce figury Kosiarza (ok. 1915) Konstantego Laszczki (1865–1956) i Wiatr (1899) Wacława Szymanowskiego (1859–1930), twórcy słynnego pomnika Fryderyka Chopina w warszawskich Łazienkach oraz wczesne prace Xawerego Dunikowskiego (1875–1964) Portret matki (1899) i Prymulkę (1898).
    
                            Xawery Dunikowski przez krótki czas w l. 1959–1964 był związany z wrocławską Państwową Wyższą Szkołą Sztuk Plastycznych (dziś Akademia Sztuk Plastycznych), gdzie kierował Katedrą Rzeźby. W 1948 r. jego Popiersie Robotnika i modele rzeźb eksponowano na Wystawie Ziem Odzyskanych. Wykonane według tych ostatnich wzorów piaskowcowe, monumentalne rzeźby prezentowane są dziś po wschodniej stronie Pawilonu Czterech Kopuł.
                        </p>
                   
                </section>
    
                <section id="sztuka-slaska-xiv-xvi-w">
    
                    <center><h2>,,Sztuka śląska XIV-XVI w." - I piętro</h2></center>
                    <center><img src="images/sztuka_slaska.jpg" width ="600" alt="sztuka-slaska"></center>
                    
                        <p>
                            <b>Muzeum Narodowe we Wrocławiu posiada jedną z najciekawszych i najcenniejszych kolekcji sztuki średniowiecznej w Polsce i środkowej Europie. W galerii sztuki śląskiej XIV–XVI w. prezentowany jest bogaty wybór gotyckiego malarstwa tablicowego oraz rzeźby drewnianej. Na korytarzach natomiast znajdują są przykłady gotyckiego rzemiosła artystycznego z interesującymi kolekcjami zamków i kluczy, monet oraz pieczęci.</b>
                        </p>
                        <p>
                            Najstarszym obrazem w galerii jest Tron Łaski ze Świerzawy namalowany około 1350 r. Jego autorstwo przypisuje się malarzowi z pracowni Mistrza Zaśnięcia Marii z Košatek w Czechach. Dzieło wykazuje wyraźne wpływy malarstwa bizantyjskiego oraz toskańskiego, jednakże jego pierwotne pochodzenie do dziś nie zostało ustalone, ponieważ obraz odnaleziono w 1898 r. na strychu plebanii w Świerzawie koło Złotoryi.
    
                            Gotycką rzeźbę religijną z drugiej połowy XIV wieku reprezentuje sześć figur apostołów i św. Marii Magdaleny. Rzeźby te powstały we wrocławskiej pracowni Mistrza Figur Apostołów w l. 1360–1370. Pierwotnie umieszczone były na filarach nawy głównej kościoła św. Marii Magdaleny we Wrocławiu, przeznaczone były zatem do oglądania z dołu, stąd ich monumentalizujące bryłę nienaturalne proporcje.
    
                            Jednym z najbardziej urzekających dzieł tej galerii jest kameralny obraz Matka Boska z Dzieciątkiem w komnacie namalowany około 1450 r. w pracowni malarskiej związanej z działalnością Mistrza Wrocławskiego Poliptyku św. Barbary. W centrum kompozycji znajduje się postać Marii z Dzieciątkiem Jezus, której płaszcz przytrzymują dwaj aniołowie stojący po jej bokach.
    
                            Znakomitym przykładem gotyckiej nastawy ołtarzowej typu szafiastego jest tryptyk św. Jadwigi wykonany w l. 1470–1480 dla kościoła św. Elżbiety we Wrocławiu. Autorstwo przypisuje się Mistrzowi Ołtarza Zwiastowania.
    
                            Wśród innych średniowiecznych rzeźb ołtarzowych warto zwrócić uwagę także na trzy figury z kościoła w Domasławiu. Przedstawiają one Marię z Dzieciątkiem, św. Jana Chrzciciela oraz św. Katarzynę i reprezentują wysoką klasę artystyczną. Ołtarz, w którym rzeźby te pierwotnie się znajdowały, powstał w 1519 r. w pracowni Mistrza H.S., utożsamianego niekiedy z działającym we Wrocławiu Hansem Schmydem. Ołtarz reprezentuje już zdecydowanie późną fazę śląskiego gotyku. Pełne subtelnego wdzięku postacie Marii i obojga świętych wyróżnia mistrzowski modelunek szat.
    
                            Wyjątkowo cennym zabytkiem jest Herma relikwiarzowa św. Doroty. To niezwykłe dzieło ma kształt popiersia młodej kobiety o surowych rysach z mocno wysklepionym czołem i głową ozdobioną kunsztowną koroną. Powstało ono w 1. ćw. XV wieku ze srebrnej i częściowo złoconej blachy. W jej wnętrzu znajdowała się szczególnie cenna relikwia – czaszka św. Doroty, obecnie przechowywana we wrocławskiej katedrze. Po II wojnie światowej obiekt wywieziono z Wrocławia i włączono do zbiorów Muzeum Narodowego w Warszawie, jednak od 1987 r. herma była pokazywana we Wrocławiu jako depozyt, a w 2000 r. powróciła na stałe do Muzeum Narodowego we Wrocławiu i dziś stanowi wielką ozdobę kolekcji sztuki gotyckiej, eksponowaną osobno w specjalnie przystosowanej do tego celu sali.<br><br>
                        </p>
    
    
                </section>
            </section>
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