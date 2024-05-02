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
        <!--Ürün özellikleri görüntüleme ve id isim ile bulma-->
        <div id="products_info_divs">
          <h2>ÜRÜN BİLGİLERİNİ GÖRÜNTÜLE</h2>
          <?php
          $search_id = isset($_POST['search_id']) ? $_POST['search_id'] : '';
          $search_name = isset($_POST['search_name']) ? $_POST['search_name'] : '';

          foreach ($all_data as $data) {
            $i = $data["id"];
            $display_style = 'none'; // Başlangıçta tüm divler gizlenecek
            if (empty($search_id) && empty($search_name)) {
              $display_style = 'block'; // Eğer inputlardan gelen değerler yoksa, tüm divler görünür olacak
            } else {
              if ($search_id == $data["id"] || $search_name == $data["isim"]) {
                $display_style = 'block'; // Aranan ID ile eşleşen divler görünür hale gelecek
              }
            }

            echo '<div id="search_info_cards_' . $i . '"  class="search_info_cards" style="display: ' . $display_style . '">';
            echo "Telefon ID: " . $data["id"] . "<br>";
            echo "Telefon Adı: " . $data["isim"] . "<br>";
            echo "RAM: " . $data["ram"] . " GB" . "<br>";
            echo "Ekran Boyutu: " . $data["ekran_boyutu"] . " inç" . "<br>";
            echo "Hafıza: " . $data["hafiza"] . " GB" . "<br>";
            echo "İşlemci: " . $data["islemci"] . "<br>";
            echo "<button type='submit' onclick='go_products(this)' id='go_store_button_" . $i . "' class='go_store_button'><b>Mağazada Gör</b></button>";
            echo "</div>";
            $i++;
          }

          
          ?>
        </div>
          
        <!--Ürün özelliklerini değiştirme-->
        <div id="products_settings_divs">

          <h1>Telefon Özelliklerini Değiştirme</h1>
          <form action="telefon_degistir.php" method="post" id="products_fix_form">
            <input type="number" id="fix_telefon_id" name="fix_telefon_id" placeholder="Telefon ID" required>
            <input type="text" id="fix_telefon_markasi" name="fix_telefon_markasi" placeholder="Telefon Markası"
              required>
            <input type="text" id="fix_telefon_adi" name="fix_telefon_adi" placeholder="Telefon Adı" required>
            <input type="number" id="fix_ram" name="fix_ram" placeholder="Ram (GB)" required>
            <input type="number" id="fix_hafiza" name="fix_hafiza" placeholder="Hafıza (GB)" required>
            <input type="number" id="fix_pil_kapasitesi" name="fix_pil_kapasitesi" placeholder="Pil Kapasitesi (mAh)"
              required>
            <input type="text" id="fix_islemci" name="fix_islemci" placeholder="İşlemci" required>
            <input type="number" id="fix_fiyat" name="fix_fiyat" placeholder="Fiyat (TL)" required>
            <input type="file" id="fix_resim" name="fix_resim">
            <input type="number" id="fix_depo_id" name="fix_depo_id" placeholder="Depo ID" required>

            <input type="submit" value="Değiştir">
          </form>
        </div>

      </div>
      <script src="../../js/master_admin.js"></script>


</body>

</html>