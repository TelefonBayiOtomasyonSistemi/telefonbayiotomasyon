<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/musteri_settings.css">
</head>

<body>
  <div id="musteri_settings_body_div">
    <div class="musteri_settings_container" id="musteri_settings_left_container">

      <h2>Sipariş İşlemşeri</h2>
      <ul>
        <li><a href="#">Siprariş Görüntüleme</a></li>
        <li><a href="#" onclick="showFixPhone()">Sipariş Düzenleme</a></li>
        <li><a href="#" onclick="showAddPhone()">Sipariş İptal Etme</a></li>
        <li><a href="#" onclick="showDelPhone()">Geçmiş Siparişler</a></li>
      </ul>

      <h2>Hesap İşlemleri</h2>
      <ul>
        <li><a href="#">Hesap Bilgileri Görüntüleme</a></li>
        <li><a href="#">Hesap Bilgilerini Değiştir</a></li>
        <li><a href="#" onclick="help()">Destek</a></li>
        <li><a href="#" onclick="logOut()">Çıkış Yap</a></li>
      </ul>



    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <div id="musteri_settings_right_container" class="musteri_settings_container">
    <?php include ("../contact/contact.php");
        ?>
      <div class="musteri_settings_right_products_container">
        <h1>Ürün İşlemleri</h1>
        
      </div>
    </div>


  </div>
</body>

</html>