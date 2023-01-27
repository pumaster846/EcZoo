<?
    session_start();
?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style-homePage.css">
	<link rel="stylesheet" href="css/media.css">
	<title>ЭкZoo</title>
</head>
<body>
	<div class="wrapper">
		<div class="conteiner">
			<div class="menu-wrap">
				<div class="menu-burger" onclick="burger(this)">
					<div class="burger-text">Меню</div>
					<div class="stick1"></div>
					<div class="stick2"></div>
					<div class="stick3"></div>
				</div>
				<div class="menu-block">
				<?
				if($_SESSION['autorized'] == true){
					echo 'Ваш логин: '.$_SESSION['login'].'
						<a href="index.php" class="menu-list title6">Главная</a>
						<a href="PHP/find.php" class="menu-list title6">Поиск</a>
						<a href="PHP/logout.php" name="exit" class="menu-list title6">Выход</a>
							<div class="menu-footer">
								<div class="title5">создание сайта - Мирсал Нигаматьянов</div>
								<img class="logo" src="img/icons/icon-logo.png">
							</div>';
						}else{
						echo
						'<a href="index.php" class="menu-list title6">Главная</a>
						<a href="PHP/find.php" class="menu-list title6">Поиск</a>
						<a href="PHP/login.php" class="menu-list login title6">Авторизоваться</a>
						<div class="menu-footer">
							<div class="title5">создание сайта - Мирсал Нигаматьянов</div>
							<img class="logo" src="img/icons/icon-logo.png">
						</div>';
					}
				?>
				</div>
			</div>
			<div class="header">
				<div class="slider-wrap">
					<div class="slider-block">
					<img src="img/pictures/Slider/Slider-главная.png" alt="Главная" class="_active">
						<img src="img/pictures/Slider/Slider-копытные.png" alt="Копытные">
						<img src="img/pictures/Slider/Slider-кошачьи.png" alt="Кошачьи">
						<img src="img/pictures/Slider/Slider-рептилии.png" alt="Рептилии">
						<img src="img/pictures/Slider/Slider-рукокрылые.png" alt="Рукокрылые">
						<img src="img/pictures/Slider/Slider-насекомые.png" alt="Насекомые">
					</div>
					<a class="prev">&#10094</a>
					<a class="next">&#10095</a>
				</div>
			</div>
			<div class="body">
				<div class="catalog">
					<div class="title1">основные типы животных</div>
					<div class="catalog-menu">
						<div class="catalog-menu__row">
							<div class="block">
		                        <a href="pages/ungulates.php"><img src="img/pictures/Копытные.png" alt="Копытные" class="image"></a>
		                        <a href="pages/ungulates.php"><div class="title2">копытные</div></a>
		                    </div>
		                    <div class="block">
		                    	<a href="pages/catlike.php"><img src="img/pictures/Кошачьи.png" alt="Кошачьи" class="image"></a>
		                    	<a href="pages/catlike.php"><div class="title2">кошачьи</div></a>
		                    </div>
		                    <div class="block">
		                    	<a href="pages/kynie.php"><img src="img/pictures/Куньи.png" alt="Куньи" class="image"></a>
		                    	<a href="pages/kynie.php"><div class="title2">куньи</div></a>
		                    </div>
		                </div>
		                <div class="catalog-menu__row">
		                    <div class="block">
		                        <a href="pages/doglike.php"><img src="img/pictures/Псовые.png" alt="Псовые" class="image"></a>
		                        <a href="pages/doglike.php"><div class="title2">псовые</div></a>
		                    </div>
		                    <div class="block">
		                        <a href="pages/reptiles.php"><img src="img/pictures/Рептилии.png" alt="Рептилии" class="image"></a>
		                        <a href="pages/reptiles.php"><div class="title2">рептилии</div></a>
		                    </div>
		                    <div class="block">
		                        <a href="pages/cheiroptera.php"><img src="img/pictures/Рукокрылые.png" alt="Рукокрылые" class="image"></a>
		                        <a href="pages/cheiroptera.php"><div  class="title2">рукокрылые</div></a>
		                    </div>
		                </div>
		                <div class="catalog-menu__row">
		                	<div class="block">
		                		<a href="pages/amphibians.php"><img src="img/pictures/Амфибии.png" alt="" class="image"></a>
								<a href="pages/amphibians.php"><div class="title2">амфибии</div></a>
		                    </div>
		                    <div class="block">
		                    	<a href="pages/rodents.php"><img src="img/pictures/Грызуны.png" alt="Грызуны" class="image"></a>
		                    	<a href="pages/rodents.php"><div class="title2">грызуны</div></a>
		                	</div>
		                	<div class="block">
		                		<a href="pages/arthropods.php"><img src="img/pictures/Насекомые.png" alt="" class="image"></a>
		                		<a href="pages/arthropods.php"><div class="title2">насекомые</div></a>
		                	</div>
		                </div>
		            </div>
		        </div>
		        <div class="footer">
		            <div class="footer__block">
		                <div class="block-social">
		                    <div class="social__title title5">создание сайта - Нигаматьянов Мирсал</div>
		                    <div class="social__icons">
		                    	<a href="https://vk.com/puma845" class="icons-social" target="_blank"><i class="fa fa-vk"></i></a>
		                        <a href="https://www.instagram.com/6madness_puma6/" class="icons-social" target="_blank"><i class="fa fa-instagram"></i></a>
		                        <a href="https://www.facebook.com/mirsal.nigamatyanov.9" class="icons-social" target="_blank"><i class="fa fa-facebook-f"></i></a>
		                    </div>
		                </div>
		                <div class="footer-menu">
		                    <div class="footer-menu__title">животные</div>
		                    <div class="footer-menu__wrap">
		                        <div class="footer-menu__row">
		                            <div class="footer-menu__block">
		                                <a href="pages/ungulates.php"><img src="img/icons/buffalo.png" alt="" class="footer-icon"></a>
		                            </div>
		                            <div class="footer-menu__block">
		                                <a href="pages/catlike.php"><img src="img/icons/leopard.png" alt="" class="footer-icon"></a>
		                            </div>
		                            <div class="footer-menu__block">
		                                <a href="pages/kynie.php"><img src="img/icons/ferret.png" alt="" class="footer-icon"></a>
		                            </div>
		                        </div>
		                        <div class="footer-menu__row">
		                            <div class="footer-menu__block">
		                                <a href="pages/doglike.php"><img src="img/icons/fennec.png" alt="" class="footer-icon"></a>
		                            </div>
		                        	<div class="footer-menu__block">
		                                <a href="pages/reptiles.php"><img src="img/icons/chameleon.png" alt="" class="footer-icon"></a>
		                        	</div>
		                            <div class="footer-menu__block">
		                            	<a href="pages/cheiroptera.php"><img src="img/icons/bats.png" alt="" class="footer-icon"></a>
		                            </div>
		                        </div>
		                        <div class="footer-menu__row">
		                            <div class="footer-menu__block">
		                                <a href="pages/amphibians.php"><img src="img/icons/frog.png" alt="" class="footer-icon"></a>
		                            </div>
		                            <div class="footer-menu__block">
		                                <a href="pages/rodents.php"><img src="img/icons/squirrel.png" alt="" class="footer-icon"></a>
		                            </div>
		                            <div class="footer-menu__block">
		                                <a href="pages/arthropods.php"><img src="img/icons/ant.png" alt="" class="footer-icon"></a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="footer-info">
		                    <div class="title5">@ЭкZoo, 2021</div>
		                    <a href="index.php"><img src="img/icons/icon-logo.png" alt="logo-ЭкZoo" class="logo"></a>
		                </div>
		           	</div>
		        </div>
			</div>
		</div>
	</div>
	<script src="JS/script.js"></script>
</body>
</html>