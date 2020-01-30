<?php
	session_start();
	include 'style/css_cookie_check.php';
	$loggedIn = false;
	$userId = 0;
	if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany'] == true)) {
		$loggedIn = true;
		$userId = $_SESSION['userId'];
	};
	$errors  = array();
	$values  = array();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$mysqli = new mysqli("localhost","root","","test");
		// Check connection
		if ($mysqli -> connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			die('Błąd połączenia z bazą danych');
		}

		foreach($_POST as $key => $value) {
			$values[$key] = trim($value);
		}
		if ($values['secondPassword'] != $values['password']){
			$errors['password'] = 'Hasła nie są identyczne';
		}
		
		if(check_input($values['email']) == false){
			$errors['email'] = 'Nie wprowadzileś e-maila';
		}
		if(check_input($values['login']) == false){
			$errors['login'] = 'Nie wprowadzileś loginu';
		}
		
		if(check_input($values['password']) == false){
			$errors['password'] = 'Nie wprowadzileś hasła';
		}
		else{
			if(!preg_match('/^(?=.*[0-9])(?=.*[A-Z]).{8,20}$/', $values['password'])){
				$errors['password'] = 'Nieprawidłowe hasło';
			}
		}
		if(!filter_var($values['email'], FILTER_VALIDATE_EMAIL)){
			$errors['email'] = 'Nieprawidłowy email';
		}
		if(!$loggedIn){
			if ($result = $mysqli -> query("SELECT login,email FROM users")) {
				while( $row = $result->fetch_row()){
					if($values['login'] == $row[0]){
						$errors['login'] = 'Taki login już istnieje';
					}
					if($values['email'] == $row[1]){
						$errors['email'] = 'Taki email już istnieje';
					}
				}
			}
		}
		if(sizeof($errors) == 0){
			$login2 = $values['login'];
			$password = $values['password'];
			$email = $values['email'];
			$values = array();
			if($loggedIn){
				if($update = $mysqli->query("UPDATE users SET login = '$login2', password='$password', email='$email' WHERE id=$userId")){
					$_SESSION['zalogowany']=true;
					$_SESSION['user']=$login2;
					header('Location: index.php');
					exit();
				}	
			}
			else{
				if($insert = $mysqli->query("INSERT INTO users(`login`,`password`,`email`) VALUES('$login2', '$password', '$email')")){
					if($getId = $mysqli->query("SELECT id from users where login='$login2'")){
						$row = $getId->fetch_row();
						$_SESSION['userId'] = $row[0];
						$_SESSION['zalogowany'] = true;
						$_SESSION['user'] = $login2;
						unset($_SESSION['blad']);
						header('Location: index.php');
						exit();
					}
				}
				else{
					echo $mysqli->error;
				}
			}
				
		}
		$mysqli -> close();
	}
	else if($loggedIn){
		$mysqli = new mysqli("localhost","root","","test");
		// Check connection
		if ($mysqli -> connect_errno) {
		  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		  exit();
		}
		if ($result2 = $mysqli -> query("SELECT `login`,`email`,`password` FROM users where id = $userId")) {
			while( $row = $result2->fetch_row()){
				$values['login'] = $row[0];
				$values['email'] = $row[1];
				$values['password'] = $row[2];
            }
		}
		$mysqli -> close();
	}
    function check_input($input) {
		if (strlen($input) == 0) {
			return false;
		} else {
			// TODO: other checks?
			return true;
		}
	}
	function strip_slashes_recursive( $variable )
{
    if ( is_string( $variable ) )
        return stripslashes( $variable ) ;
    if ( is_array( $variable ) )
        foreach( $variable as $i => $value )
            $variable[ $i ] = strip_slashes_recursive( $value ) ;
   
    return $variable ;
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
        <input type='text' name="login" placeholder='Login' value="<?php echo @$values['login']?>"/>
		<?php echo @$errors['login'] ?></br>
        <input type='email' name='email' placeholder='Email' value="<?php echo stripcslashes(@$values['email'])?>"/>
		<?php echo @$errors['email'] ?></br>
        <input type="password" name='password' placeholder='Hasło' value="<?php echo stripcslashes(@$values['password'])?>"/>
		<?php echo @$errors['password'] ?></br>
        <input type="password" name='secondPassword' placeholder='Powtórz hasło' value="<?php echo stripcslashes(@$values['password'])?>"/></br>
        <input type='submit' value="<?php echo $loggedIn? 'Zmień':'Zarejestruj'?>" formnovalidate="formnovalidate"/>	
	</form>
	</div>
	
	<?php
		if(isset($_SESSION['blad']))
			echo $_SESSION['blad'];
	?>

</body>
</html>