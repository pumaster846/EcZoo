<?
	 session_start();
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?
	require_once ('../connect.php');
	if(isset($_GET['Keye'])) {
		$sql="select * from `animals` where `ID_animal`=?";
		$rez=$pdo->prepare($sql);
		$rez->execute(array("$_GET[Keye]"));
		$line=$rez->fetch();
			echo "<form name='EditForm' action='''>
                <div class='block-Ed'><div class='blockEd'><div class='title1'>Редактирование</div><input type='hidden' name='hiddenID' value=".$line['ID_animal'].">
                Путь к картинке: <input type='text' class='lastname' name='EdPictures'".$line['Pictures']."'>
                Небольшая информация: <input type='text' class='firstname' name='EdShort_info'".$line['Short_info']."'>
                Название: <input type='text' class='group' name='EdName'".$line['Name']."'>
                Класс: <input type='text' class='DR' name='EdClass'".$line['Class']."'>
                Отряд: <input type='text' class='firstname' name='EdKind'".$line['Kind']."'>
				Рост: <input type='text' class='firstname' name='EdHeight'".$line['Height']."'>
				Вес: <input type='text' class='firstname' name='EdWeight'".$line['Weight']."'>
				Питание: <input type='text' class='firstname' name='EdFood'".$line['Food']."'>
				Продолжительность жизни: <input type='text' class='firstname' name='EdLife_span'".$line['Life_span']."'>
				Внешний вид: <input type='text' class='firstname' name='EdAppearance'".$line['appearance']."'>
				Образ жизни: <input type='text' class='firstname' name='EdLifestyle_info'".$line['lifestyle_info']."'>
				Ключ места обитания: <input type='text' class='firstname' name='EdID_habitats'".$line['ID_habitats']."'>
                <input type='submit' name='Edsave' class='buttonEd' value='Сохранить'></div></div>
			</form>";
	}
	if(isset($_GET['Edsave'])){
		$sql2="UPDATE `animals` SET `Pictures`=?, `Short_info`=?, `Name`=?, `Class`=?, `Kind`=?, `Height`=?, `Weight`=?, `Food`=?, `Life_span`=?, `appearance`=?, `lifestyle_info`=?, `ID_habitats`=? WHERE `ID_animal`=?";
		$ed=$pdo->prepare($sql2);
		$ed->execute(array("$_GET[EdPictures]","$_GET[EdShort_info]","$_GET[EdName]","$_GET[EdClass]","$_GET[EdKind]","$_GET[EdHeight]","$_GET[EdWeight]","$_GET[EdFood]","$_GET[EdLife_span]","$_GET[EdAppearance]","$_GET[EdLifestyle_info]","$_GET[EdID_habitats]","$_GET[hiddenID]"));
		echo '<script type="text/javascript">location.href="Index.php"</script>';
	}
?>