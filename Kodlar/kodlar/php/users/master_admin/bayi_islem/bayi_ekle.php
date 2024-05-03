<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../../css/master_admin.css">
</head>

<body>
  <div id="admin_body_div">
    <div class="admin_container" id="admin_left_container">

    <h2>Ürün İşlemleri</h2>
      <ul>
        <li><a href="../urun_islem/urun_gor.php">Ürün Görüntüleme</a></li>
        <li><a href="../urun_islem/urun_degis.php">Ürün Düzenleme</a></li>
        <li><a href="../urun_islem/urun_ekle.php">Ürün Ekleme</a></li>
        <li><a href="../urun_islem/urun_sil.php">Ürün Silme</a></li>
      </ul>

      <h2>Depo İşlemleri</h2>
      <ul>
        <li><a href="../depo_islem/depo_gor">Depo Görüntüleme</a></li>
        <li><a href="../depo_islem/depo_degis">Depo Düzenleme</a></li>
        <li><a href="../depo_islem/depo_ekle">Depo Ekleme</a></li>
        <li><a href="../depo_islem/depo_sil">Depo Silme</a></li>
      </ul>

      <h2>Bayi İşlemleri</h2>
      <ul>
        <li><a href="bayi_gor">Bayi Görüntüleme</a></li>
        <li><a href="bayi_degis">Bayi Düzenleme</a></li>
        <li><a href="bayi_ekle">Bayi Ekleme</a></li>
        <li><a href="bayi_sil">Bayi Silme</a></li>
        <li><a href="bayi_gecmis_islem">Geçmiş İşlemler</a></li>
      </ul>

      <h2>Hesap İşlemleri</h2>
      <ul>
        <li><a href="../hesap_islem/hesap_gor">Hesap Bilgileri Görüntüleme</a></li>
        <li><a href="../hesap_islem/hesap_degis">Hesap Değiştir</a></li>
        <li><a href="../hesap_islem/hesap_ekle">Hesap Ekleme</a></li>
        <li><a href="../hesap_islem/hesap_sil">Hesap Silme</a></li>
        <li><a href="../hesap_islem/hesap_destek">Destek</a></li>
        <li><a href="../hesap_islem/hesap_cikis">Çıkış Yap</a></li>
      </ul>





    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <?php include ("../../../contact/take_all_data.php");
    ?>
    <div id="admin_right_container" class="admin_container">
    <div id="start_div">
          LÜTFEN SOL TARAFTAKİ MENÜYÜ KULLANINIZ....
        </div>
      <div class="admin_right_products_container">
        
        <!--Buraya Ürün Bulmak için kodlar eklendi-->
        <div id="products_search">
          <h1>ÜRÜN İŞLEMLERİ</h1>
          <form id="search_info_form" method="POST">
            <input type="text" name="search_id" id="search_id" placeholder="Ürün ID">
            <input type="text" name="search_name" id="search_name" placeholder="Ürün Adı">
            <button type="submit" id="search_info_button">Ürünü Ara</button>
          </form>
        </div>
          
        <!--Ürün ekleme-->
        <div id="products_add_divs">
          <h1>Telefon Ekleme</h1>
          <form action="telefon_ekle.php" method="post" id="products_add_form">
            <input type="text" id="add_telefon_markasi" name="add_telefon_markasi" placeholder="Telefon Markası">
            <input type="text" id="add_telefon_adi" name="add_telefon_adi" placeholder="Telefon Adı">
            <input type="number" id="add_ram" name="add_ram" placeholder="Ram (GB)">
            <input type="number" id="add_hafiza" name="add_hafiza" placeholder="Hafıza (GB)">
            <input type="number" id="add_pil_kapasitesi" name="add_pil_kapasitesi" placeholder="Pil Kapasitesi (mAh)">
            <input type="text" id="add_islemci" name="add_islemci" placeholder="İşlemci">
            <input type="number" id="add_fiyat" name="add_fiyat" placeholder="Fiyat (TL)">
            <input type="file" id="add_resim" name="add_resim">
            <input type="number" id="add_depo_id" name="add_depo_id" placeholder="Depo ID">

            <input type="submit" value="Ekle">
          </form>

        </div>

      </div>
      <script src="../../js/master_admin.js"></script>


</body>

</html>