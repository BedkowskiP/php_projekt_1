<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="page.js"></script>
    <title>Przychodnia</title>
</head>
<body>
    <header>
        <img src="img/logo.png">
        <nav>
            <a href="#info" onclick="infShow()" class="nav main-info active">Informacje dla pacjenta</a>
            <a href="#firma" onclick="firShow()" class="nav main-firma no-active">Obsługa Firmy</a>
            <a href="#uslugi" onclick="uslShow()" class="nav main-uslugi no-active">Usługi</a>
            <div class="buttons">
                <button onclick="location.href='login.php'">Zaloguj się</button>
                <button onclick="location.href='register.php'">Zarejestruj się</button>
            </div>
        </nav>
    </header>
    <article class="main-info display">
        <section>
            <h2>Koronawirus</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis ac sapien ac aliquam. Duis consequat est ut ipsum pulvinar faucibus. Nunc hendrerit libero quam, vel tincidunt ipsum semper in. Ut ultrices fringilla elit, ut bibendum felis convallis sed. Quisque molestie metus eu nisl tristique pretium. Nullam sit amet diam tempus, tristique ligula a, mattis lorem. Morbi vulputate felis quis orci tincidunt gravida. Aliquam mattis sapien non velit vestibulum, in placerat sem tempus. Fusce commodo enim eget orci blandit scelerisque. Proin sem purus, blandit sed orci et, tincidunt interdum ipsum. Praesent vitae sodales nulla. Sed lacus risus, convallis a porta non, ultrices sit amet neque.</p>
        </section>
        <section>
            <h2>Ogłoszenie przychodni</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis ac sapien ac aliquam. Duis consequat est ut ipsum pulvinar faucibus. Nunc hendrerit libero quam, vel tincidunt ipsum semper in. Ut ultrices fringilla elit, ut bibendum felis convallis sed. Quisque molestie metus eu nisl tristique pretium. Nullam sit amet diam tempus, tristique ligula a, mattis lorem. Morbi vulputate felis quis orci tincidunt gravida. Aliquam mattis sapien non velit vestibulum, in placerat sem tempus. Fusce commodo enim eget orci blandit scelerisque. Proin sem purus, blandit sed orci et, tincidunt interdum ipsum. Praesent vitae sodales nulla. Sed lacus risus, convallis a porta non, ultrices sit amet neque.</p>
        </section>
    </article>
    <article class="main-firma hidden">
        
    </article>
    <article class="main-uslugi hidden">

    </article>
    <footer>
        Copyrights &copy; 2022 Piotr Będkowski. All Rights Reserved
    </footer>
</body>
</html>