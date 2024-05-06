<?php
$id = $_GET['id'];
$telefon_id = $_GET['telefon_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap İşlemleri</title>
    <link rel="stylesheet" href="../../../../css/master_admin.css">
</head>

<body>
    <div id="nav_div">
        <img alt="Logo" id="logo" onclick="link()"
            src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihYqd3kSkHdxvcw18NkCjs8iGZmTSHHyrR-C_IqYHNS8PC9xamzcwieWHPvvjA2SYrI04Mu3bRdQ2dojKKxupRI12sPmXOk5dAQ=w1920-h957">
        <ul>
            <li><a href="../../../products/products.php?id=<?php echo $id; ?>&telefon_id=<?php echo $telefon_id; ?>">ÜRÜNLERİMİZ</a></li>
            <li><a href="../../../products/list.php?id=<?php echo $id; ?>&telefon_id=<?php echo $telefon_id; ?>">SEPETE GİT</a></li>
            <li><a href="#">DESTEK</a></li>
            <li><a href="../../../users/hesap_ayar/hesap_islem/hesap_ayarlari_degis.php?id=<?php echo $id; ?>&telefon_id=<?php echo $telefon_id; ?>" id="log_in">HESABIM</a></li>
        </ul>
    </div>
    <div id="container">
        <div id="left_container">
            <?php include("../hesap_left_bar.php"); ?>
        </div>
        <!-- Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir. -->
        <?php include("../../../contact/take_all_data.php"); ?>
        <div id="right_container">
            <div id="acount_info_divs">
                <h2>HESAP BİLGİLERİ</h2>
                <?php
                foreach ($kullanici_datas as $data) {
                    if ($data["musteri_id"] == $id) {
                        echo '<div id="search_info_cards_' . $id . '"  class="search_info_cards">';
                        echo "Müşteri ID: " . $data["musteri_id"] . "<br>";
                        echo "Hesap Tipi: " . $data["hesap_tipi"] . "<br>";
                        echo "Ad: " . $data["ad"] . "<br>";
                        echo "Soyad: " . $data["soyad"] . "<br>";
                        echo "E-posta: " . $data["email"] . "<br>";
                        echo "Şifre: " . $data["sifre"] . "<br>";
                        echo "Doğum Günü: " . $data["dogum_gunu"] . "<br>";
                        echo "Adres: " . $data["adres"] . "<br>";
                        echo "</div>";
                        break; // Bu şekilde sadece eşleşen bir müşteri için kartı yazacak ve döngüyü sonlandıracak.
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        function link() {
            window.location.href = "../../../home/home.php?id=<?php echo $id; ?>&telefon_id=<?php echo $telefon_id; ?>";
        }
    </script>
    <script src="../../js/master_admin.js"></script>
</body>

</html>
