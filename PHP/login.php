<?
    session_start();
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация</title>
	<link rel="stylesheet" href="../css/media.css">
	<link rel="stylesheet" href="../css/style-homePage.css">
</head>
<body>
<div class="wrapper">
		<div class="conteiner">
		<?
			if(!isset($_GET['authorization'])){
		?>
		    <form class="registration" method='GET'>
		        <div class="title1">авторизация на сайте</div>
		        <div class="registration__block">
		        	<img src="../img/pictures/BG-registration.png" class="bg">
		        	<div class="title3">У вас нет аккаунта? <a href="registration.php" class="text-login">Зарегистрироваться</a>.</div>
		        	<div class="title3">Зарегестрируйтесь у нас, чтобы получить доступ к дополнительной информации или <a href="../index.php" class="text-login">вернуться на Главную</a>.</div>
		        	<div class="input-fields">
		        		<div class="input-fields__row">
		        			<div class="title4">Логин:</div>
		        			<input type="text" name="login" class="textbox" required>
		        		</div>
		        		<div class="input-fields__row">
		        			<div class="title4">Пароль:</div>
		        			<input type="password" name="pass" class="textbox" required>
		        		</div>
		        		<div class="input-fields__row">
		        			<input type="submit" name="authorization" class="But" value="Войти">
		        		</div>
		        	</div>
		        </div>
		    </form>
		<?
			}else{
				if($_GET['login']!='' and $_GET['pass']!=''){
				$safe_login = $_GET['login'];
				$safe_pass = $_GET['pass'];
				$safe_pass = md5($safe_pass);
				require_once('connect.php');
				$sqlUsers = "SELECT * FROM `users` WHERE `Login` like ? and `Password` like ?";
				$result = $pdo -> prepare($sqlUsers);
				$result-> execute(array("$safe_login", "$safe_pass"));
				$line2 = $result->fetchAll ();
				$count = count($line2);
					If($count > 0){
						$_SESSION['autorized'] = true;
						$_SESSION['login']=$_GET['login'];
						echo '<script type="text/javascript">location.href="../index.php"</script>';
						}else{
							echo 
							"<form class='registration' method='GET'>
								<div class='title1'>авторизация на сайте</div>
								<div class='registration__block'>
									<img src='../img/pictures/BG-registration.png' class='bg'>
									<div class='title3'>У вас нет аккаунта? <a href='registration.php' class='text-login'>Зарегистрироваться</a>.</div>
									<div class='title3'>Зарегестрируйтесь у нас, чтобы получить доступ к дополнительной информации или <a href='../index.php' class='text-login'>вернуться на Главную</a>.</div>
									<div class='input-fields'>
										<div class='input-fields__row'>
											<div class='title4'>Логин:</div>
											<input type='text' name='login' class='textbox' required>
										</div>
										<div class='input-fields__row'>
											<div class='title4'>Пароль:</div>
											<input type='password' name='pass' class='textbox' required>
										</div>
										<div class='input-fields__row'>
											<input type='submit' name='Authorization' class='But' value='Войти'>
										</div>
										<p class='login__error-message'>Неверный Логин или Пароль</p>
									</div>
								</div>
							</form>";
						}
					}
				}if(isset($_GET['exit'])) {
					$_SESSION['autorized'] = false;
					require_once("find.php");
				}
		?>
				</div>
			</div>
	<script src="../JS/script.js"></script>
</body>
</html>