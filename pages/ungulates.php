<?
    session_start();
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style-allPage.css">
	<link rel="stylesheet" type="text/css" href="../css/media.css">
	<title>ЭкZoo - Отряд Копытных</title>
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
						<a href="ungulates.php"><li class="list-menu active">копытные</li></a>
						<a href="catlike.php"><li class="list-menu">кошачьи</li></a>
						<a href="kynie.php"><li class="list-menu">куньи</li></a>
						<a href="doglike.php"><li class="list-menu">псовые</li></a>
						<a href="reptiles.php"><li class="list-menu">рептилии</li></a>
						<a href="cheiroptera.php"><li class="list-menu">рукокрылые</li></a>
						<a href="amphibians.php"><li class="list-menu">амфибии</li></a>
						<a href="rodents.php"><li class="list-menu">грызуны</li></a>
						<a href="arthropods.php"><li class="list-menu">насекомые</li></a>
						<a href="../PHP/find.php"><li class="list-menu serch-animals"><i class="fa fa-search"></i>поиск</li></a>
					</ul>
				</div>
			</div>
			<div class="right-block">
				<div class="header" style="background: url(../img/pictures/Копытные/Копытные.jpg) 100% 100%">
					<div class="content-top">
						<div><a href="../index.php" class="name-site">ЭкZoo</a></div>
					</div>
					<div class="content-bottom">
						<h1 class="detachment__title">Отряд Копытные</h1>
						<h2 class="detachment-info detachment-info__title">Копытные(Ungulata) — группа растительноядных млекопитающих включающая 6 отрядов: парнокопытные, непарнокопытные, мозоленогие (верблюды), хоботные (слоны), сирены и даманы. Первые 3 отряда объединяют настоящих копытных (конечности заканчиваются копытами).</h2>
					</div>
				</div>
				<div class="content">
					<div class="content-text name-class_title">Представители копытных.</div>
						<?php
							require_once('../PHP/connect.php');
							$animalsInfo = get_animals_kop();
							foreach ($animalsInfo as $animalInfo): ?>
								<div class="content-row">
									<div class="content__left-block"><img src="<?php echo $animalInfo["Pictures"]; ?>"></div>
									<div class="content__right-block">
										<div class="animal-name"><?php echo $animalInfo["Name"]; ?></div>
										<p class="animal-info title2"><?php echo $animalInfo["Short_info"]; ?></p>
									</div>
									<?
										if($_SESSION['autorized'] == true){
											?><a href="../PHP/show-more.php?id=<?php echo $animalInfo["ID_animal"]?>" class="show-more title2">Подробнее</a><?
										}else {
											?><a href="../PHP/login.php" class="show-more title2">Авторизуйтесь</a><?}?>
								</div>
						<? endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>