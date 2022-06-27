<?php
    session_start();
    require "../config.php";
    $id = $_SESSION['id'];
    $sql = "select * from `pacjent` where id=".$id."";
    $result = $polaczenie->query($sql);
    $row = mysqli_fetch_row($result);
    $pacjent = $row;
    $imie = $pacjent[1];
    $_SESSION['imie'] = $imie;
    mysqli_free_result($result);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="pacjent.css">
    <script src="../page.js"></script>
    <script src="admin.js"></script>
    <title>Przychodnia - pacjent</title>
</head>
<body>
    <header>
        <img src="../img/logo.png">
        <nav>
            <a href="#Wszystkie_wizyty" onclick="allWizShow()" class="nav main-wiz active">Wszystkie Wizyty</a>
            <a href="#Umow_wizyte" onclick="newWizShow()" class="nav main-umow no-active">Umów Wizytę</a>
            <div class="buttons">
                Witaj <?php echo $imie; ?>
                <button onclick="location.href='../logout.php'">Wyloguj się</button>
            </div>
        </nav>
    </header>
    <article class="main-wiz display">
            <h1>Panel Pacjenta</h1>
            <h2>Najbliższe wizyty:<h2>
                <?php
                    $today = DATE("YYYY-MM-DD HH:MI:SS");
                    $sql = 'SELECT * FROM `wizyta`,`lekarz` where wizyta.id_pac="'.$id.'" AND wizyta.data_wiz > CURDATE() AND lekarz.id=wizyta.id_lek';
                    $result = $polaczenie->query($sql);
                    if($result == null) echo "<h3>Brak umówionych wizyt</h3>";
                    else {
                        echo "<table>
                                <tr>
                                    <td>Data Wizyty</td>
                                    <td>Lekarz</td>
                                    <td>Specjalizacja</td>
                                    <td>Gabinet</td>
                                </tr>";
                        while($row = mysqli_fetch_row($result)){
                            echo "<tr>
                                    <td>".$row[3]."</td>
                                    <td>".$row[6]." ".$row[7]."</td>
                                    <td>".$row[8]."</td>
                                    <td>".$row[10]."</td>
                                </tr>";
                        }
                            
                        echo "</table>";
                    } 
                ?>
            <h2>Historia wizyt:<h2>
                <?php 
                    $sql = 'SELECT * FROM `wizyta`,`lekarz` where wizyta.id_pac="'.$id.'" AND wizyta.data_wiz < CURDATE() AND lekarz.id=wizyta.id_lek';
                    $result = $polaczenie->query($sql);
                    if($result == null) echo "<h3>Brak historii wizyt</h3>";
                    else {
                        echo "<table>
                        <tr>
                            <td>Data Wizyty</td>
                            <td>Lekarz</td>
                            <td>Specjalizacja</td>
                            <td>Gabinet</td>
                        </tr>";
                        while($row = mysqli_fetch_row($result)){
                            echo "<tr>
                                    <td>".$row[3]."</td>
                                    <td>".$row[6]." ".$row[7]."</td>
                                    <td>".$row[8]."</td>
                                    <td>".$row[10]."</td>
                                </tr>";
                        }
                            
                        echo "</table>";
                    } 
                ?>
    </article>
    <article class="main-umow hidden">
        <h1>Umów wizytę:</h1>
        <form method="post" action="umow_wiz.php">
        <?php echo '<input type="hidden" name="id_pac" value="'.$pacjent[0].'">'; ?>
            <select name="spec">
                <option value="Laryngolog">Laryngolog</option>
                <option value="Kardiolog">Kardiolog</option>
            </select>
            Opisz swoją dolegliwość:
            <textarea name="opis"></textarea>
            <input type="submit" value="Umów wizytę">
        </form>
    </article>
    <footer>
        Copyrights &copy; 2022 Piotr Będkowski. All Rights Reserved
    </footer>
</body>
</html>