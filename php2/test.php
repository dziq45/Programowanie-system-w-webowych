<?php
    $values  = array();
    $mysqli = new mysqli("localhost","root","","test");
    $flag = false;
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach($_POST as $key => $value) {
			$values[$key] = trim($value);
        }
        $query = "SELECT * FROM users";
        if(strlen($values['login']) >0){
            $flag = true;
            $query.=' where login = ';
            $query.= '\'';
            $query.=$values['login'];
            $query.= '\'';
        }
        if(strlen($values['email'])>0){
            if($flag){
                $query.='and email = \'';
                $query.=$values['email'];
                $query.= '\'';
            }
            else{
                $flag = true;
                $query.=' where email = ';
                $query.= '\'';
                $query.=$values['email'];
                $query.= '\'';
            }
        }
        if(strlen($values['password'])>0){
            if($flag){
                $query.='and password = \'';
                $query.=$values['password'];
                $query.= '\'';
            }
            else{
                $query.=' where password = ';
                $query.= '\'';
                $query.=$values['password'];
                $query.= '\'';
            }
        }
        echo $query .'</br>';
        if ($result = $mysqli -> query($query)) {
            while( $row = $result->fetch_row()){
                echo $row[0] . '       ' . $row[1] . '       ' . $row[2] . '       ' . $row[3] . '       ' . $row[4] . '</br>';
            }
        }else{
            echo $mysqli->error;
        }
    }
    else{
        $query = "SELECT * FROM users";
        if ($result = $mysqli -> query($query)) {
            while( $row = $result->fetch_row()){
                echo $row[0] . '       ' . $row[1] . '       ' . $row[2] . '       ' . $row[3] . '       ' . $row[4] . '</br>';
            }
        }
    }
    
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" href="style/<?php echo $styleChoice?>/styles.css" type="text/css"/>
	<title>Muzeum- muzeum narodowe Wrocław</title>
</head>

<body>
	<div class="ticketForm">
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type='text' name="login" placeholder='Login'/>
		</br>
        <input type='email' name='email' placeholder='Email' value=/>
		</br>
        <input type="password" name='password' placeholder='Hasło'/>
		</br>
        <input type='submit' value='Wyszukaj' formnovalidate="formnovalidate"/>	
	</form>
	</div>
	
	<?php
	
		if(isset($_SESSION['blad']))
			echo $_SESSION['blad'];
	
	?>

</body>
</html>