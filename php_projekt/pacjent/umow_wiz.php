<?php
    include '../config.php';

    if(isset($_POST)){
        $pac = $_POST['id_pac'];
        $spec = $_POST['spec'];
        $opis = $_POST['opis'];

        $sql = "INSERT INTO `nowa_wizyta`(`id`, `id_pacjent`, `specjalizacja`, `opis`) VALUES ('','".$pac."','".$spec."','".$opis."')";
        $result = $polaczenie->query($sql);
        header('Location: pacjent.php');
        mysqli_free_result($result);
        exit();
    }
    
?>