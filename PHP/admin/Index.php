<?
    session_start();
        $_SESSION['ch'] = 1;
        require_once('../connect.php');
?>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Admin</title>
    </head>
    <body>
		<div class="wrapper">
			<div class="header">
				<div class="autorized">
					<div class="header__title">
						<h1>ИНФОРМАЦИЯ  О ЖИВОТНЫХ</h1>
					</div>
					<div class="login">
						<?
							if($_SESSION['autorized'] == true){
								echo 'Ваш логин: '.$_SESSION['login'].' '.'<a href="../logout.php" name="exit">Выход</a>';
							}else{
								echo '<a href="../login.php">Авторизация</a>';
							}
						?>
					</div>
				</div>
			</div>
			<div class="table__block">
				<div class="block__left">
					<div class="table-info">
						<?
				if (!isset($_SESSION['autorized'])){
					require_once('login.php');
				}else{
					echo "<table border=1 style='text-align: center; '>
					<tr>
						<td align='center'>Ключ</td>
						<td align='center'>Фотографии</td>
						<td align='center'>Небольшая информация</td>
						<td align='center'>Название</td>
						<td align='center'>Класс</td>
						<td align='center'>Отряд</td>
						<td align='center'>Рост</td>
						<td align='center'>Вес</td>
						<td align='center'>Питание</td>
						<td align='center'>Продолжительность жизни</td>
						<td align='center'>Ключ места обитания</td>
						<td align='center'>Внешний вид</td>
						<td align='center'>Образ жизни</td>
						<td align='center' colspan='2'>Правка</td>
					</tr>";
					require_once('../connect.php');
					echo
					"<form name='my_form' method='GET' action='Ins.php'>
						<input type='submit' name='Add' value='Добавить животного'><br>
					</form>";
					$animalsInfo = get_animal();
					foreach ($animalsInfo as $n){
						echo
						"<tr>
							<td align='center'>".$n['ID_animal']."</td>
							<td>".$n['Pictures']."</td>
							<td>".$n['Short_info']."</td>
							<td>".$n['Name']."</td>
							<td>".$n['Class']."</td>
							<td>".$n['Kind']."</td>
							<td>".$n['Height']."</td>
							<td>".$n['Weight']."</td>
							<td>".$n['Food']."</td>
							<td>".$n['Life_span']."</td>
							<td>".$n['ID_habitats']."</td>
							<td>".$n['appearance']."</td>
							<td>".$n['lifestyle_info']."</td>
							<td><a href=ed.php?Keye=".$n['ID_animal']."><img src='img/edit.png' alt='edit' border=0></a></td>
							<td><a href=del.php?Keyd=".$n['ID_animal']."><img src='img/delete.png' alt='delete' border=0></a></td>
						</tr>";
					}
				}
				echo "</table>";
			?>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="block__title">
					<h2>ЭкZoo</h2>
				</div>
			</div>
		</div>
    </body>
</html>