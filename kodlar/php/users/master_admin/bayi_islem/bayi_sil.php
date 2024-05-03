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
      <?php include("../left_bar.php"); ?>
    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <?php include ("../../../contact/contact.php"); ?>
    <div id="admin_right_container" class="admin_container">
      <div class="admin_right_products_container">

        <!--Buraya Bayi Bulmak için kodlar eklendi-->
        <div id="dealers_search">
          <h1>BAYİ İŞLEMLERİ</h1>
          <form id="dealer_info_form" method="POST">
            <input type="text" name="search_id" id="search_id" placeholder="Bayi ID">
            <input type="text" name="search_city" id="search_city" placeholder="Bayi Şehri">
            <button type="submit" id="dealer_info_button">Bayileri Bul</button>
          </form>
        </div>
        <!--Bayi bilgilerini görüntüleme-->

        <div id="dealer_info_divs">
          <h2>BAYİ BİLGİLERİNİ GÖRÜNTÜLE</h2>
          <div class="card-container">
            <?php
            // Bayi bilgilerini alma
            $query_dealer_stock = mysqli_query($connection, 'SELECT * FROM bayi_stok');
            $query_dealer = mysqli_query($connection, 'SELECT * FROM bayi');
            $product_types = array(); // Ürün tiplerini tutacak dizi
            $all_data_dealer_stock = array();
            // Tüm bayi stoklarını al
            while ($take = mysqli_fetch_array($query_dealer_stock)) {
              $data = [
                "dealer_id" => $take["bayi_id"],
                "phone_id" => $take["telefon_id"],
                "stock" => $take["stok"]
              ];
              $all_data_dealer_stock[] = $data;
              // Ürün tiplerini diziye ekle
              $product_types[] = $data["phone_id"];
            }
            // Ürün tiplerini unique hale getir
            $product_types = array_unique($product_types);
            $all_data_dealer = array();
            // Tüm bayileri al
            while ($take = mysqli_fetch_array($query_dealer)) {
              $data = [
                "dealer_id" => $take["bayi_id"],
                "city" => $take["ilce"]
              ];
              $all_data_dealer[] = $data;
            }
            // Her bir bayi için işlem yap
            foreach ($all_data_dealer as $dealer) {
              $dealer_id = $dealer['dealer_id'];
              $dealer_city = $dealer['city'];
              $stock_amount = 0; // Başlangıçta stok miktarını sıfırla
              // Bayi stok miktarını hesapla
              foreach ($all_data_dealer_stock as $dealer_stock) {
                if ($dealer_stock['dealer_id'] == $dealer_id) {
                  $stock_amount += $dealer_stock['stock'];
                }
              }
              // Ürün tipi sayısını al
              $product_type_count = count($product_types) + 1;

              // Kartları filtrele
              $search_id = isset($_POST["search_id"]) ? $_POST["search_id"] : "";
              $search_city = isset($_POST["search_city"]) ? $_POST["search_city"] : "";

              $display_style = "none";
              if (empty($search_id) && empty($search_city)) {
                $display_style = 'block';
              } else {
                if ($search_id == $dealer["dealer_id"] || $search_city == $dealer["city"]) {
                  $display_style = 'block';
                }
              }
              echo "  <div class='card' id ='dealer_card_" . $dealer_id . "' style='display: " . $display_style . "'>";
              echo "<h3>Bayi Bilgileri</h3>";
              echo "<p><strong>Bayi ID:</strong> " . $dealer_id . "</p>";
              echo "<p><strong>Bayi Şehri:</strong> " . $dealer_city . "</p>";
              echo "<p><strong>Stok Miktarı:</strong> " . $stock_amount . "</p>";
              echo "<p><strong>Ürün Tipi Sayısı:</strong>" . $product_type_count . "</p>";
              echo "<button type='button' id='dealer_exp_" . $dealer_id . "'' >Bayideki Ürünleri Gör</button>";
              echo "</div>";

            }
            ?>
          </div>
        </div>
      </div>
      <!--Ürün silme-->
      <div id="warehouse_delete_form">
            <h4> Bayiyi Silmek İstiyor musunuz?</h4>
            <button onclick="silmeOnayi()">Evet</button>
            <button onclick="iptal()">Hayır</button>
          </div>
    </div>
  </div>
</body>

</html>
