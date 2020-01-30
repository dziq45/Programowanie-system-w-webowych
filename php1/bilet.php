<!DOCTYPE html>
<html>
<head>
<style>
    .cont{
        background-color:#a19c9c;
        padding:20px;
        border: solid black 1px;
        margin-top:20px;
    }
    .contParent{
        display: flex;
        justify-content:space-around;
    }
</style>
</head>
<body>
    <main>
        <div class='contParent'>
        <div class="cont">
            <h1>Dziękujemy za skorzystanie z naszych usług</h1>
            <?php

            $ulgi = array('Weteran'=>0.5, 'Dziecko'=>0.3, 'Student'=>0.3, 'Senior'=>0.5);
            $pozostaleBilety = array('Seans Multimedialny', 'Tajemnice złotniczej pracowni', 'Fotografie Ewy Martyniszyn');
            $disMonths=array('Styczeń', 'Luty', 'Grudzień');
            $flag = TRUE;
            $flag2 = FALSE;
            $discountArr = array("ulgowy"=>0.2, "normalny"=>0);
            $nameee = $_POST["name"];
            $sname = $_POST["sname"]; 
            $email = $_POST["email"];
            $ulga = $_POST["ulgi"];
            $phoneNumber = $_POST["phone"]; 
            $ticketType = $_POST["typ"];
            if(!preg_match('/^[A-Z]{1}+[a-z]{1,}$/', $nameee)){
                $flag = FALSE;
                echo "Niestety popełniłeś błędy przy wypełnianiu formularza. <br>";
                echo "Błędy w imieniu <br>";
                $flag2 = TRUE;
            }
            if(!preg_match('/^[A-Z]{1}+[a-z]{1,}$/', $sname)){
                $flag = FALSE;
                if(!$flag2){
                    echo "Niestety popełniłeś błędy przy wypełnianiu formularza. <br>";
                    $flag2=TRUE;
                }
                echo "Błędy w nazwisku <br>";
                
            }

            if(!preg_match('/^[0-9]{9}$/', $phoneNumber)){
                $flag = FALSE;
                if(!$flag2){
                    echo "Niestety popełniłeś błędy przy wypełnianiu formularza. <br>";
                    $flag2=TRUE;
                }
                echo "Zły numer <br>";
                
            }
            if($flag){
                if($ticketType == 'ulgowy'){
                    echo "<h2>Zostałeś objęty zniżką " . (int)($discountArr["ulgowy"] * 100). "% </h2>";
                    echo "<img width=130 height=100 src ='images\smile.jpg'> <br>";
                };
                for($i=0; $i<count($disMonths); $i++){
                    if($_POST["month"] == $disMonths[$i]){
                        echo "Dodatkowa zniżka 10% za porę zimową";
                    }
                }  
            }
            else{
                echo "<img width=100 height=100 src ='images\disappointedFace.png'><br>";
            }
            if($ulga == 'Brak'){
                echo "Nie wybrałeś żadnej ulgi. <br> Lista dostępnych ulg: <br><br>";
                while($ul = current($ulgi)){
                    echo key($ulgi). " - ". $ul*100 ."% <br>";
                    next($ulgi);
                }
            }
            echo "<b>Zapraszamy na posotałe atrakcje:</b> <br>";
            foreach($pozostaleBilety as $value){
                echo "*" . $value . "<br>";
            }
            ?>
        </div>
        <div class='cont'>
            Adres ip klienta:
            <?php
                $ip = $_SERVER['REMOTE_ADDR'];
                echo $ip . '<br>';
                $time = $_SERVER['REQUEST_TIME_FLOAT'];
                die('Wykonanie funkcji die');
                echo 'Request time: ' .$time;
            ?>
        </div>
        </div>
        </main>
</body>
</html>