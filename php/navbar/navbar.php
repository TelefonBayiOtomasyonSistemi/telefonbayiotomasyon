<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/navbar.css">
</head>

<body>
    <div id="nav_div">
        <img alt="Logo" id="logo" onclick="link()"
            src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihYqd3kSkHdxvcw18NkCjs8iGZmTSHHyrR-C_IqYHNS8PC9xamzcwieWHPvvjA2SYrI04Mu3bRdQ2dojKKxupRI12sPmXOk5dAQ=w1920-h957">
        <ul>
            <li><a href="../products/products.php">ÜRÜNLERİMİZ</a></li>
            <li><a href="#">HAKKIMIZDA</a></li>
            <li><a href="#">DESTEK</a></li>
            <li><a href="../login/login.php" id="log_in">GİRİŞ YAP</a></li>
        </ul>
    </div>
    <script>
        function link() {
            window.location.href = "../home/home.php";
        }
    </script>
</body>

</html>