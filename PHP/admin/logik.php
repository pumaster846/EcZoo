<?
require_once('connect.php');
$sql = "SELECT * FROM `IS31`";
$Data = $pdo->query($sql);
$Line = $Data->fetchAll();
//var_dump($Line);
?>