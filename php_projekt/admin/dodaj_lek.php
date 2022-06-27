<?php
    include '../config.php';
    if($_POST!=null){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $spec = $_POST['spec'];
    $numer = $_POST['numer'];
    $gabinet = $_POST['gabinet'];

    $sql = "INSERT INTO `lekarz`(`id`, `imie`, `nazwisko`, `specjalizacja`, `numer_tel`, `gabinet`) VALUES ('','".$imie."','".$nazwisko."','".$spec."','".$numer."','".$gabinet."')";
    $result = $polaczenie->query($sql);
    header('Location: admin.php');
    mysqli_free_result($result);
    exit();
    }
?>