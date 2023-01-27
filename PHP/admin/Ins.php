<?
	require_once ("../connect.php");
	if(isset($_GET['Add'])){
?>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
    <meta charset="utf-8">
	<form name='AddForm' action=''>
		<div class='block-Ed'>
			<div class='blockEd'>
				<div class='title1'>Редактирование</div>
					Путь к картинке: <input type='text' class='lastname' name='Pictures' <?$line['Pictures']?>>
					Небольшая информация: <input type='text' class='firstname' name='Short_info' <?$line['Short_info']?>>
					Название: <input type='text' class='group' name='Name' <?$line['Name']?>>
					Класс: <input type='text' class='DR' name='Class' <?$line['Class']?>>
					Отряд: <input type='text' class='firstname' name='Kind' <?$line['Kind']?>>
					Рост: <input type='text' class='firstname' name='Height' <?$line['Height']?>>
					Вес: <input type='text' class='firstname' name='Weight' <?$line['Weight']?>>
					Питание: <input type='text' class='firstname' name='Food' <?$line['Food']?>>
					Продолжительность жизни: <input type='text' class='firstname' name='Life_span' <?$line['Life_span']?>>
					Внешний вид: <input type='text' class='firstname' name='appearance' <?$line['appearance']?>>
					Образ жизни: <input type='text' class='firstname' name='lifestyle_info' <?$line['lifestyle_info']?>>
					Ключ места обитания: <input type='text' class='firstname' name='ID_habitats' <?$line['ID_habitats']?>>
					<input type='submit' name='InsBut' class='buttonEd' value='Сохранить'>
				</div>
		</div>
	</form>
	<?
	}
	if(isset($_GET['InsBut'])){
		$sql = "insert into `animals` SET `Pictures`=?, `Short_info`=? , `Name`=? , `Class`=?, `Kind`=?, `Height`=?, `Weight`=?, `Food`=?, `Life_span`=?, `appearance`=?, `lifestyle_info`=?, `ID_habitats`=?";
		$ins = $pdo->prepare($sql);
		$ins->execute(array("$_GET[Pictures]","$_GET[Short_info]","$_GET[Name]","$_GET[Class]", "$_GET[Kind]", "$_GET[Height]", "$_GET[Weight]", "$_GET[Food]", "$_GET[Life_span]", "$_GET[appearance]", "$_GET[lifestyle_info]", "$_GET[ID_habitats]"));
		echo '<script type="text/javascript">location.href="Index.php"</script>';
	}
?>