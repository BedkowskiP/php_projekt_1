<?php
    include '../config.php';
    $id_wiz = $_GET['id'];
    $id_pac = $spec = '';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../form.css">
    <title>Przychodnia</title>
</head>
<body>
    <div id="error" class="hidden">
        
    </div> 
    <form method="POST" name="loginForm" action="dodaj_wiz.php">
        <p><a href="admin.php">Wróć</a></p>
        <div class="form">
            <h2>Umów wizytę</h2>
            <?php
                $sql = "SELECT * FROM pacjent, nowa_wizyta where nowa_wizyta.id_pacjent=pacjent.id AND nowa_wizyta.id=".$id_wiz."";
                $result = $polaczenie->query($sql);
                $row = mysqli_fetch_row($result);
                $spec = $row[11];
                echo "<p>Imię i nazwisko: ".$row[1]." ".$row[2]."</p>";
                echo "<p>Pesel: ".$row[5]."</p>";
                echo "<p>Data urodzenia: ".$row[6]."</p>";
                echo "<p>Adres zamieszkania: ".$row[7].", ".$row[8]."</p>";
                echo "<p>Specjalizacja: ".$row[11]."</p>";
                echo "<p>Dolegliwość: ".$row[12]."</p><br>";
                echo "<input type='hidden' name='nowa_wiz' value='".$row[9]."'>";
                echo "<input type='hidden' name='dolegliwosc' value='".$row[12]."'>";
                echo "<input type='hidden' name='id_pac' value='".$row[0]."'>";
                mysqli_free_result($result);
            ?>
            <select name="spec">
            <option value="Wybierz Lekarza" selected disabled>Wybierz Lekarza</option>
                <?php
                    $sql = "SELECT * FROM `lekarz`  where specjalizacja='".$spec."'";
                    $result = $polaczenie->query($sql);
                    while($lek = mysqli_fetch_row($result)){
                        echo "<option value=".$lek[0].">".$lek[1]." ".$lek[2]."</option>";
                    }
                    mysqli_free_result($result);
                ?>
            </select>
            <input type="date" name="date">
            <select name="godzina">
                  <option value="Wybierz godzinę" selected disabled>Wybierz godzinę</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
            </select>
            <input type="submit" value="Umów">
        </div>
    </form>
    <script src="validate.js"></script>
</body>
</html>