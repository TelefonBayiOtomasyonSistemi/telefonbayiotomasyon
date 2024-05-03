<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/satici_admin.css">
</head>

<body>
  <div id="satici_admin_body_div">
    <div class="satici_admin_container" id="satici_admin_left_container">

      <h2>Ürün İşlemleri</h2>
      <ul>
        <li><a href="#">Ürün Görüntüleme</a></li>
        <li><a href="#" onclick="showFixPhone()">Ürün Düzenleme</a></li>
        <li><a href="#" onclick="showAddPhone()">Ürün Ekleme</a></li>
        <li><a href="#" onclick="showDelPhone()">Ürün Silme</a></li>
      </ul>

      <h2>Bayi İşlemleri</h2>
      <ul>
        <li><a href="#">Bayi Görüntüleme</a></li>
        <li><a href="#" onclick="showFixPhone()">Bayi Düzenleme</a></li>
        <li><a href="#" onclick="showFixPhone()">Geçmiş İşlemler</a></li>
      </ul>

      <h2>Hesap İşlemleri</h2>
      <ul>
        <li><a href="#">Hesap Bilgileri Görüntüleme</a></li>
        <li><a href="#">Hesap Değiştir</a></li>
        <li><a href="#" onclick="help()">Destek</a></li>
        <li><a href="#" onclick="logOut()">Çıkış Yap</a></li>
      </ul>



    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <div id="satici_admin_right_container" class="satici_admin_container">
    <?php include ("../contact/contact.php");
        ?>
      <div class="satici_admin_right_products_container">
        <h1>Ürün İşlemleri</h1>
        
      </div>
    </div>


  </div>
</body>

</html>