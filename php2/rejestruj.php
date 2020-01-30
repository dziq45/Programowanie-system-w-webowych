<?php
    session_start();
    $mysqli = new mysqli("localhost","root","","test");
    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    $login2 = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $secondPassword = $_POST['secondPassword'];

    if ($secondPassword != $password){
        die('Hasla nie sa takie same');
    }


    // sprawdzanie czy login i email nie sa takie same 


    if ($result = $mysqli -> query("SELECT login,email FROM users")) {
        while( $row = $result->fetch_row()){
            if($login2 == $row[0]){
                die('Już jest taki login');
            }
            if($email == $row[1]){
                die('Już jest taki mail');
            }
        }
    }
    echo $login2 . '  ' . $password . '   '  .  $secondPassword . '   ' . $email;
    if($insert = $mysqli->query("INSERT INTO users(`login`,`password`,`email`) VALUES('$login2', '$password', '$email')")){
        echo 'Udało sie dodać rekord';
    }
    else{
        echo $mysqli->error;
    }
        
    $mysqli -> close();
?>