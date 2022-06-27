<?php
    session_start();
    require "config.php";

    if($_POST!=null){
      if(isset($_POST['admin']) && $_POST['admin'] == 'On'){ 
        $sql = "select * from admin where email='".$_POST['login']."'";
        $result = $polaczenie->query($sql); 
        $row = mysqli_fetch_row($result); 
        if($result!=null && $row!=null && password_verify($_POST['psswd'], $row[2])) {
          header('Location: admin/admin.php');
          exit();
        }
        else {
          header('Location: login.php');
          echo 'huj';
          exit();
        }
      }
      else{
        $pacjentEmail = $_POST['login'];
        $pacjentHaslo = $_POST['psswd'];
        $sql = "select * from pacjent where email='".$pacjentEmail."'";
        $result = $polaczenie->query($sql);  
        $row = mysqli_fetch_row($result); 
        if($result!=null && $row!=null && password_verify($pacjentHaslo, $row[4])) {
          $_SESSION['id'] = $row[0].'';
          $pacjentID=$row[0];
          header('Location: pacjent/pacjent.php');
          exit();
        }
        else {
          header('Location: login.php');
          exit();
        }
      }
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
    <title>Przychodnia - zaloguj się</title>
</head>
<body>
    <div id="error" class="hidden">
        
    </div> 
    <form method="POST" onsubmit="return validateLogin()" name="loginForm" action="login.php">
        <p><a href="index.php">Wróć</a></p>
        <div class="form">
            <h2>Zaloguj się</h2>
            <input type="text" name="login" placeholder="email@przychodnia.com">
            <input type="password" name="psswd" placeholder="Hasło">
            <input type="checkbox" name="admin" value="On"> 
            <label for="admin">Zaloguj jako administrator</label>
            <p>Nie masz konta? <a href="register.php">Zarejestruj się</a></p>
            <input type="submit" value="Zaloguj się">
        </div>
    </form>
    <script src="validate.js"></script>
</body>
</html>