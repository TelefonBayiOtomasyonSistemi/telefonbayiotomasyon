<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/master_admin.css">
</head>

<body>
  <div id="admin_body_div">
    <div class="admin_container" id="admin_left_container">

      <h2>Ürün İşlemleri</h2>
      <ul>
        <li><a href="#">Ürün Görüntüleme</a></li>
        <li><a href="#" onclick="showFixPhone()">Ürün Düzenleme</a></li>
        <li><a href="#" onclick="showAddPhone()">Ürün Ekleme</a></li>
        <li><a href="#" onclick="showDelPhone()">Ürün Silme</a></li>
      </ul>

      <h2>Depo İşlemleri</h2>
      <ul>
        <li><a href="#">Depo Görüntüleme</a></li>
        <li><a href="#" onclick="showFixPhone()">Depo Düzenleme</a></li>
        <li><a href="#" onclick="showAddPhone()">Depo Ekleme</a></li>
        <li><a href="#">Depo Silme</a></li>
      </ul>

      <h2>Bayi İşlemleri</h2>
      <ul>
        <li><a href="#">Bayi Görüntüleme</a></li>
        <li><a href="#" onclick="showFixPhone()">Bayi Düzenleme</a></li>
        <li><a href="#" onclick="showAddPhone()">Bayi Ekleme</a></li>
        <li><a href="#">Bayi Silme</a></li>
        <li><a href="#" onclick="showFixPhone()">Geçmiş İşlemler</a></li>
      </ul>

      <h2>Hesap İşlemleri</h2>
      <ul>
        <li><a href="#">Hesap Bilgileri Görüntüleme</a></li>
        <li><a href="#">Hesap Değiştir</a></li>
        <li><a href="#" onclick="showAddPhone()">Hesap Ekleme</a></li>
        <li><a href="#" onclick="showDelPhone()">Hesap Silme</a></li>
        <li><a href="#" onclick="help()">Destek</a></li>
        <li><a href="#" onclick="logOut()">Çıkış Yap</a></li>
      </ul>



    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <?php include ("../contact/contact.php");
        ?>
    <div id="admin_right_container" class="admin_container">
    <h1>ÜRÜN AYARLARI</h1>
    <h2>ÜRÜN BİLGİLERİNİ GÖRÜNTÜLE</h2>
      <div class="admin_right_products_container">
        <div id="products_search">
          <form action="#" id="search_info_form">
            <input type="text" name="search_id" id="search_id" placeholder="Ürün ID">
            <input type="text" name="search_name" id="search_name" placeholder="Ürün Adı">
            <button id="search_info_button">Ürünü Ara</button>
          </form>
        </div>
        <div id="products_info_divs">
      
        </div>
      </div>
    </div>


  </div>
</body>

</html>