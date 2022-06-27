<?php
    include '../config.php';
    if($_POST!=null){
    $data = $_POST['date']." ".$_POST['godzina'].":00";
    $sql = "INSERT INTO `wizyta`(`id`, `id_lek`, `id_pac`, `data_wiz`, `opis`) VALUES ('','".$_POST['spec']."','".$_POST['id_pac']."','".$data."','".$_POST['dolegliwosc']."')";
    $result = $polaczenie->query($sql);
    $sql = "DELETE FROM nowa_wizyta where id=".$_POST['nowa_wiz']."";
    $result = $polaczenie->query($sql);
    header('Location: admin.php');
    mysqli_free_result($result);
    exit();
    }
?>