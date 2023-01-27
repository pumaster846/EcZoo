<?
    session_start();
    require_once('../connect.php');
    
    if (isset($_GET['Keyd'])){
        $sql = "Select * from `animals` where `ID_animal` = ?";
        $rez= $pdo -> prepare($sql);
        $rez -> execute(array("$_GET[Keyd]"));
        $sql= "delete from `animals` where `ID_animal` =?";
        $del= $pdo -> prepare($sql);
        $del -> execute(array("$_GET[Keyd]"));
        echo '<script type="text/javascript">location.href="index.php"</script>';        
    }
?>