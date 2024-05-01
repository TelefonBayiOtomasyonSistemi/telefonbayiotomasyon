<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/register.css">
</head>

<body>
    <?php
    require ("../navbar/navbar.php");
    ?>

    <div id="container_register">

        <form  method="POST">
            <h2>Kayıt Formu</h2>
            <label for="name">İsim</label><br>
            <input type="text" id="name" name="register_name" required><br><br>

            <label for="surname">Soyisim</label><br>
            <input type="text" id="surname" name="register_surname" required><br><br>

            <label for="email">E-mail</label><br>
            <input type="email" id="email" name="register_email" required><br><br>

            <label for="phone">Telefon Numarası</label><br>
            <input type="tel" id="phone" name="register_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                placeholder="Örn:555-555-5555" required><br><br>

            <label for="password">Şifre</label><br>
            <input type="password" id="password" name="register_password" required><br><br>

            <label for="birthday">Doğum Günü</label><br>
            <input type="date" id="birthday" name="register_birthday" required><br><br>

            <input type="submit" value="Kayıt Ol">
            <input type="button" value="Hesabınız var mı? Giriş yapın." id="login_button_register" onclick="go_login()">

        </form>

        
    </div>
    <!--Burada footer verilmiştir-->
    <footer>
        <?php require ("../footer/footer.php"); ?>
    </footer>
    <!--Burada script verilmiştir-->

    <script>
        function go_login(){
            window.location.href = "../login/login.php";
        };
    </script>

</body>

</html>