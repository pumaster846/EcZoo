<?
$host = 'localhost';
$db = 'экzoo';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array (
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
);
$pdo = new PDO($dsn, $user, $pass, $opt);

//-------------------------------------Все животные-------------------------------------
function get_animal(){
	global $pdo;
	$animalsInfo = $pdo->query("select * from `animals` ORDER BY `Name` asc");
	foreach($animalsInfo as $animalInfo){
		return $animalsInfo;
	}
}

//-------------------------------------Все животные по ID-------------------------------------
function get_animal_by_id($id){
	global $pdo;
	$singles = $pdo->query("select * from `animals` where `Id_animal` = '$id'");
	foreach($singles as $single){
		return $single;
	}
}

//-------------------------------------Все места обитания-------------------------------------
function get_habitat_by_id($id){
	global $pdo;
	$habitats = $pdo->query("select * from `habitats` where `Id_habitats` = '$id'");
	foreach($habitats as $habitat){
		return $habitat["Habitat"];
	}
}

//-------------------------------------Копытные-------------------------------------
function get_animals_kop(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Копытные%'");
	return $sqlAnimals;
}

//-------------------------------------Амфибии-------------------------------------
function get_animals_amf(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Амфибии%'");
	return $sqlAnimals;
}

//-------------------------------------Насекомые-------------------------------------
function get_animals_arh(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Насекомые%'");
	return $sqlAnimals;
}

//-------------------------------------Кошачьи-------------------------------------
function get_animals_cat(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Кошачие%'");
	return $sqlAnimals;
}
//-------------------------------------Рукокрылые-------------------------------------
function get_animals_cheiro(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Рукокрылые%'");
	return $sqlAnimals;
}

//-------------------------------------Псовые-------------------------------------
function get_animals_dog(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Псовые%'");
	return $sqlAnimals;
}
//-------------------------------------Куньи-------------------------------------
function get_animals_kyn(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Куньи%'");
	return $sqlAnimals;
}
//-------------------------------------Рептилии-------------------------------------
function get_animals_rep(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Рептилии%'");
	return $sqlAnimals;
}
//-------------------------------------Грызуны-------------------------------------
function get_animals_rod(){
	global $pdo;
	$sqlAnimals = $pdo->query("SELECT * FROM `animals` WHERE `Class` LIKE '%Грызуны%'");
	return $sqlAnimals;
}
?>