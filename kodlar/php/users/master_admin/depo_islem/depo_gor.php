<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../../css/master_admin.css">
  <style>
    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      width: calc(50% - 20px);
      margin: auto;
    }

    .card-container {
      margin-top: 50px;
    }

      {
      margin-top: 0;
    }

    #warehouse_info_button{
      background-color: #3c8340;
      border: #3c8340;
      padding: 5px 8px;
      color: white;
      border-radius: 5px;
      font-size: 18px;
      border: 2px solid #3c8340;
    }

    #warehouse_info_button:hover {
      cursor: pointer;
    }

    .search_info_cards {
      border: 1px solid black;
      padding: 10px;
      border-radius: 5px;
      width: 400px;
      margin: auto;
      margin-top: 50px;
      background-color: #ddf9de;
    }

    .search_info_cards button {
      margin-top: 10px;
      border: 1px solid #45a049;
      background-color: #a8ffae;
      border-radius: 5px;
      padding: 5px 7px;
    }

    .search_info_cards button:hover {
      background-color: #7bdc81;
      cursor: pointer;
    }
  </style>
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
        <li><a href="depo_gor.php">Depo Görüntüleme</a></li>
        <li><a href="depo_degis.php">Depo Düzenleme</a></li>
        <li><a href="depo_ekle.php">Depo Ekleme</a></li>
        <li><a href="depo_sil.php">Depo Silme</a></li>
      </ul>

      <h2>Bayi İşlemleri</h2>
      <ul>
        <li><a href="../bayi_islem/bayi_gor.php">Bayi Görüntüleme</a></li>
        <li><a href="../bayi_islem/bayi_degis.php">Bayi Düzenleme</a></li>
        <li><a href="../bayi_islem/bayi_ekle.php">Bayi Ekleme</a></li>
        <li><a href="../bayi_islem/bayi_sil.php">Bayi Silme</a></li>
        <li><a href="../bayi_islem/bayi_gecmis_islem.php">Geçmiş İşlemler</a></li>
      </ul>

      <h2>Hesap İşlemleri</h2>
      <ul>
        <li><a href="../hesap_islem/hesap_gor.php">Hesap Bilgileri Görüntüleme</a></li>
        <li><a href="../hesap_islem/hesap_degis.php">Hesap Değiştir</a></li>
        <li><a href="../hesap_islem/hesap_ekle.php">Hesap Ekleme</a></li>
        <li><a href="../hesap_islem/hesap_sil.php">Hesap Silme</a></li>
        <li><a href="../hesap_islem/hesap_destek.php">Destek</a></li>
        <li><a href="../hesap_islem/hesap_cikis.php">Çıkış Yap</a></li>
      </ul>

    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <?php include ("../../../contact/contact.php"); ?>
    <div id="admin_right_container" class="admin_container">
      <div class="admin_right_products_container">

        <!--Buraya Ürün Bulmak için kodlar eklendi-->
        <div id="products_search_warehouse">
          <h1>DEPO İŞLEMLERİ</h1>
          <form id="warehouse_info_form" method="POST">
            <input type="text" name="search_id" id="search_id" placeholder="Depo ID">
            <input type="text" name="search_town" id="search_town" placeholder="Depo Şehri">
            <button type="submit" id="warehouse_info_button">Depoları Bul</button>
          </form>
        </div>
        <!--DEPO özellikleri görüntüleme-->

        <div id="warehouse_info_divs">
          <h2>DEPO BİLGİLERİNİ GÖRÜNTÜLE</h2>
          <div class="card-container">
            <?php
            // Depo bilgilerini alma
            $query_warehouse_stock = mysqli_query($connection, 'SELECT * FROM depo_stok');
            $query_warehouse = mysqli_query($connection, 'SELECT * FROM depo');
            $telefon_cesidi = array(); // Telefon çeşitlerini tutacak dizi
            $all_data_depo_stok = array();
            // Tüm depo stoklarını al
            while ($take = mysqli_fetch_array($query_warehouse_stock)) {
              $data = [
                "depo_id" => $take["depo_id"],
                "phone_id" => $take["telefon_id"],
                "stok" => $take["stok"]
              ];
              $all_data_depo_stok[] = $data;
              // Telefon çeşitlerini diziye ekle
              $telefon_cesidi[] = $take["telefon_id"];
            }
            // Telefon çeşitlerini unique hale getir
            $telefon_cesidi = array_unique($telefon_cesidi);
            $all_data_depo = array();
            // Tüm depoları al
            while ($take = mysqli_fetch_array($query_warehouse)) {
              $data = [
                "depo_id" => $take["depo_id"],
                "sehir" => $take["sehir"]
              ];
              $all_data_depo[] = $data;
            }
            // Her bir depo için işlem yap
            foreach ($all_data_depo as $depo) {
              $depo_id = $depo['depo_id'];
              $depo_sehir = $depo['sehir'];
              $stok_miktari = 0; // Başlangıçta stok miktarını sıfırla
              // Depo stok miktarını hesapla
              foreach ($all_data_depo_stok as $depo_stok) {
                if ($depo_stok['depo_id'] == $depo_id) {
                  $stok_miktari += $depo_stok['stok'];
                }
              }
              // Telefon çeşidi sayısını al
              $telefon_cesidi_sayisi = count($telefon_cesidi) + 1;
              ?>
              <div class="card">
                <h3>Depo Bilgileri</h3>
                <p><strong>Depo ID:</strong> <?php echo $depo_id; ?></p>
                <p><strong>Depo Şehri:</strong> <?php echo $depo_sehir; ?></p>
                <p><strong>Stok Miktarı:</strong> <?php echo $stok_miktari; ?></p>
                <p><strong>Telefon Çeşidi Sayısı:</strong> <?php echo $telefon_cesidi_sayisi; ?></p>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>