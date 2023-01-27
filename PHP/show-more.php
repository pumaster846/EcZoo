<?
    session_start();
	require_once('connect.php');
	$single = get_animal_by_id($_GET['id']);
	$habitat_name = get_habitat_by_id($single['ID_habitats']);
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style-allPage__show-more.css">
	<link rel="stylesheet" type="text/css" href="../css/media.css">
	<title>ЭкZoo - <?php echo $single['Name']?></title>
</head>
<body>
	<div class="wrapper">
		<div class="two-blocks">
			<div class="left-block">
				<div class="navigation-menu">
				<?
					if($_SESSION['autorized'] == true){
						echo "<div class='user-name'>Ваш логин:"."<br>".$_SESSION['login']."</div><div class='authorization-state'><i class='fa fa-lock'></i><a href='../PHP/logout.php'>Выйти</a></div>";
					}else{
						echo "<div class='user-name'><div class='authorization-state'><i class='fa fa-lock'></i><a href='../PHP/login.php'>Войти</a></div></div>";
					}
				?>
					<ul class="menu">
						<a href="../pages/ungulates.php"><li class="list-menu">копытные</li></a>
						<a href="../pages/catlike.php"><li class="list-menu">кошачьи</li></a>
						<a href="../pages/kynie.php"><li class="list-menu">куньи</li></a>
						<a href="../pages/doglike.php"><li class="list-menu">псовые</li></a>
						<a href="../pages/reptiles.php"><li class="list-menu">рептилии</li></a>
						<a href="../pages/cheiroptera.php"><li class="list-menu">рукокрылые</li></a>
						<a href="../pages/amphibians.php"><li class="list-menu">амфибии</li></a>
						<a href="../pages/rodents.php"><li class="list-menu">грызуны</li></a>
						<a href="../pages/arthropods.php"><li class="list-menu">насекомые</li></a>
					</ul>
				</div>
			</div>
			<div class="right-block">
				<div class="header" style="background-image: url(<?php echo $single['Pictures']; ?>);">
					<div class="content-top">
						<div><a href="javascript:history.back()" class="comeback">&#8617;</a></div>
						<h1><a href="../index.php" class="name-site">ЭкZoo</a></h1>
					</div>
				</div>
				<div class="content">
					<h1 class="name-animal_title"><?php echo $single['Name']; ?></h1>
					<div class="content__two-blocks">
						<div class="content__left-block">
							<div class="info-table">
								<div class="table__row">
									<div class="row__text">Класс: </div>
									<div class="row__content"><?php echo $single['Class']; ?></div>
								</div>
								<div class="table__row">
									<div class="row__text">Отряд: </div>
									<div class="row__content"><?php echo $single['Kind']; ?></div>
								</div>
								<div class="table__row">
									<div class="row__text">Рост: </div>
									<div class="row__content"><?php echo $single['Height']; ?></div>
								</div>
								<div class="table__row">
									<div class="row__text">Вес: </div>
									<div class="row__content"><?php echo $single['Weight']; ?></div>
								</div>
								<div class="table__row">
									<div class="row__text">Длительность жизни: </div>
									<div class="row__content"><?php echo $single['Life_span']; ?></div>
								</div>
								<div class="table__row">
									<div class="row__text">Место обитания: </div>
									<div class="row__content"><?php echo $habitat_name; ?></div>
								</div>
							</div>
						</div>
						<div class="content__right-block1">
							<p class="animal-info__text">внешний вид</p>
							<p class="animal-info__subtext"><?php echo $single['appearance']; ?></p>
							<p class="animal-info__text">образ жизни</p>
							<p class="animal-info__subtext"><?php echo $single['lifestyle_info']; ?></p>
							<p class="animal-info__text">чем питается?</p>
							<p class="animal-info__subtext"><?php echo $single['Food']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>