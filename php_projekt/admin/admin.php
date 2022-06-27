<?php
    include '../config.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="admin.css">
    <script src="../page.js"></script>
    <script src="admin.js"></script>
    <title>Przychodnia - admin</title>
</head>
<body>
    <header>
        <img src="../img/logo.png">
        <nav>
            <a href="#Podsumowanie" onclick="podShow()" class="nav main-pod active">Podsumowanie</a>
            <a href="#Lekarze" onclick="lekShow()" class="nav main-lek no-active">Lekarze</a>
            <a href="#Pacjenci" onclick="pacShow()" class="nav main-pac no-active">Pacjenci</a>
            <a href="#Wizyty" onclick="wizShow()" class="nav main-wiz no-active">Wizyty</a>
            <a href="#Rejestracja" onclick="regShow()" class="nav main-reg no-active">Rejestracja</a>
            <div class="buttons">
                Witaj Admin!
                <button onclick="location.href='../logout.php'">Wyloguj się</button>
            </div>
        </nav>
    </header>
    <article class="main-pod display">
            <h1>Panel Administratora</h1>
            <div class="xd">
                <div class="lol">
                    <h4>Lekarze</h4>
                    <p>
                        <?php
                        $sql = "select count(*) from lekarz";
                        $result = $polaczenie->query($sql);
                        $row = mysqli_fetch_row($result);
                        echo $row[0];
                        mysqli_free_result($result);
                        ?>
                    </p>
                </div>
                <div class="lol">
                    <h4>Pacjenci</h4> 
                    <p>
                        <?php
                        $sql = "select count(*) from pacjent";
                        $result = $polaczenie->query($sql);
                        $row = mysqli_fetch_row($result);
                        echo $row[0];
                        mysqli_free_result($result);
                        ?>
                    </p>
                </div>
                <div class="lol">
                    <h4>Wizyty</h4> 
                    <p><?php
                        $sql = "select count(*) from wizyta";
                        $result = $polaczenie->query($sql);
                        $row = mysqli_fetch_row($result);
                        echo $row[0];
                        mysqli_free_result($result);
                        ?></p>
                </div>
            </div>
    </article>
    <article class="main-lek hidden">
        <h1>Lekarze: 
            <button onclick="addLek()" class="add display">Dodaj</button>
            <button onclick="tabShow()" class="tab hidden">Pokaz Listę</button>
        </h1>
        <table class="lek-tab display">
            <tr>
                <td>Imię</td>
                <td>Nazwisko</td>
                <td>Specjalizacja</td>
                <td>Numer Telefonu</td>
                <td>Numer Gabinetu</td>
                <td></td>
            </tr>
            
                <?php
                    $sql = "select * from lekarz";
                    $result = $polaczenie->query($sql);
                    if($result != null)
                    while($rows = mysqli_fetch_row($result)){
                        echo "
                        <tr>
                        <td>".$rows[1]."</td>
                        <td>".$rows[2]."</td>
                        <td>".$rows[3]."</td>
                        <td>".$rows[4]."</td>
                        <td>".$rows[5]."</td>
                        <td>
                            <a href='usun_lek.php?id=".$rows[0]."'>Usuń</a>
                        </td>
                        </tr>";
                    }
                    mysqli_free_result($result);
                ?>
            
        </table>
        <form class="lek-form hidden" method="post" action="dodaj_lek.php">
            <h1>Dodaj nowego lekarza:</h1>
            <input type="text" name="imie" placeholder="Imię">
            <input type="text" name="nazwisko" placeholder="Nazwisko">
            <select name="spec">
                <option value="Laryngolog">Laryngolog</option>
                <option value="Kardiolog">Kardiolog</option>
            </select>
            <input type="text" name="numer" placeholder="Numer Telefonu">
            <input type="text" name="gabinet" placeholder="Numer Gabinetu">
            <input type="submit" value="Dodaj">
        </form>
    </article>
    <article class="main-pac hidden">
        <h1>Pacjenci:</h1>
        <table>
            <tr>
                <td>Imię</td>
                <td>Nazwisko</td>
                <td>Pesel</td>
                <td>Data Urodzenia</td>
                <td>Adres Zamieszkania</td>
                <td>Adres e-mail</td>
            </tr>
            <?php
                    $sql = "select * from pacjent";
                    $result = $polaczenie->query($sql);
                    if($result != null)
                    while($rows = mysqli_fetch_row($result)){
                        echo "
                        <tr>
                        <td>".$rows[1]."</td>
                        <td>".$rows[2]."</td>
                        <td>".$rows[5]."</td>
                        <td>".$rows[6]."</td>
                        <td>".$rows[7].", ".$rows[8]."</td>
                        <td>".$rows[3]."</td>
                        </tr>";
                    }
                    mysqli_free_result($result);
                ?>
        </table>
    </article>
    <article class="main-wiz hidden">
        <h1>Wizyty:</h1>
        <table>
            <tr>
                <td>Data Wizyty</td>
                <td>Lekarz</td>
                <td>Specjalizacja</td>
                <td>Gabinet</td>
                <td>Pacjent</td>
                <td>Pesel Pacjenta</td>
                <td>Adres Pacjenta</td>
            </tr>
            <?php
                $sql = "SELECT * FROM pacjent, lekarz, wizyta where pacjent.id = wizyta.id_pac and lekarz.id = wizyta.id_lek";
                $result = $polaczenie->query($sql);
                while($row = mysqli_fetch_row($result)){
                    echo "
                    <tr>
                        <td>".$row[18]."</td>
                        <td>".$row[10]." ".$row[11]."</td>
                        <td>".$row[12]."</td>
                        <td>".$row[14]."</td>
                        <td>".$row[1]." ".$row[2]."</td>
                        <td>".$row[5]."</td>
                        <td>".$row[7].", ".$row[8]."</td>
                    </tr>";
                }
                mysqli_free_result($result);
            ?>
        </table>
    </article>
    <article class="main-reg hidden">
        <h1>Rejestracja wizyt:</h1>
        <table>
            <tr>
                <td>Pacjent</td>
                <td>Pesel</td>
                <td>Data urodzenia</td>
                <td>Adres Zamieszkania</td>
                <td>Adres e-mail</td>
                <td>Wybrana Specjalizacja</td>
                <td>Dolegliwość</td>
                <td></td>
            </tr>
            <?php
                $sql = "SELECT * FROM pacjent, nowa_wizyta where nowa_wizyta.id_pacjent=pacjent.id";
                $result = $polaczenie->query($sql);
                while($row = mysqli_fetch_row($result)){
                    echo "
                    <tr>
                        <td>".$row[1]." ".$row[2]."</td>
                        <td>".$row[5]."</td>
                        <td>".$row[6]."</td>
                        <td>".$row[7].", ".$row[8]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[11]."</td>
                        <td>".$row[12]."</td>
                        <td>
                            <a href='umow_wizyta.php?id=".$row[9]."'>Umów wizytę</a>
                            <a href='usun_wiz.php?id=".$row[9]."'>Usuń</a>
                        </td>
                    </tr>";
                }
                mysqli_free_result($result);
            ?>
        </table>
    </article>
    <footer>
        Copyrights &copy; 2022 Piotr Będkowski. All Rights Reserved
    </footer>
</body>
</html>