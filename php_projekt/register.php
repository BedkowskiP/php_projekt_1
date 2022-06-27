<?php
    session_start();
    require "config.php";

    if($_POST!=null){
        $pass = password_hash($_POST['psswd'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO `pacjent`(`id`, `imie`, `nazwisko`, `email`, `haslo`, `pesel`, `data_ur`, `adres`, `miasto`) VALUES ('','".$_POST['imie']."','".$_POST['nazwisko']."','".$_POST['email']."','".$pass."','".$_POST['pesel']."','".$_POST['data_uro']."','".$_POST['adres_zam']."','".$_POST['miasto']."')";
        $result = $polaczenie->query($sql);
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="form.css">
    <script src="validate.js"></script>
    <title>Przychodnia - zarejestruj się</title>
</head>
<body>
    <div id="error" class="hidden">
        
    </div> 
    <form method="POST" onsubmit="return validateRegister()" name="regForm" action="register.php">
        <p><a href="index.php">Wróć</a></p>
        <div class="form">
            <h2>Zarejestruj się</h2>
            <input type="text" name="imie" placeholder="Imię">
            <input type="text" name="nazwisko" placeholder="Nazwisko">
            <input type="date" name="data_uro" placeholder="Data Urodzenia">
            <input type="text" name="pesel" placeholder="Pesel">
            <input type="text" name="adres_zam" placeholder="Adres Zamieszkania">
            <input type="text" name="miasto" placeholder="Miasto">
            <input type="text" name="email" placeholder="email@przychodnia.com">
            <input type="password" name="psswd" placeholder="Hasło">
            <input type="password" name="psswd2" placeholder="Powtórz Hasło">
            <p>Masz już konto? <a href="login.php">Zaloguj się</a></p>
            <input type="submit" value="Zarejestruj się">
        </div>
    </form>
</body>
</html>