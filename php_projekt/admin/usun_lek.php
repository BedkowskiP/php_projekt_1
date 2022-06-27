<?php
    require_once "../config.php";
    $sql = "DELETE FROM `lekarz` WHERE id=".$_GET['id']."";
    $result = $polaczenie->query($sql);
    header('Location: admin.php');
    exit();
?>