<?
    session_start();
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style-allPage.css">
	<link rel="stylesheet" href="../css/media.css">
	<title>ЭкZoo - Поиск</title>
</head>
<body style="background: url(../img/pictures/SearchBG.jpg ) no-repeat 100%;">
	<div class="wrap">
		<a href="../index.php" class="home-title">На главную</a>
		<p class="search-title">Поиск животных</p>
		<div class="search-conteiner">
			<input type="text" id="search" placeholder="Введите название животного" autocomplete="off">
			<div class="block-search">
		<?php
			require_once('connect.php');
			$animalsInfo = get_animal();
			foreach ($animalsInfo as $animalInfo): ?>
				<ol class="list-search">
					<a href="../PHP/show-more.php?id=<?php echo $animalInfo['ID_animal']?>"><li><?php echo $animalInfo['Name']; ?></li></a>
				</ol>
			<? endforeach; ?>
			</div>
		</div>
	<script src="../JS/search.js"></script>
	</div>
</body>