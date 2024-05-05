<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bayi İşlemleri</title>
  <link rel="stylesheet" href="../../../../css/master_admin.css">
  <style>
    
  </style>
</head>

<body>
  <div id="container">
  <div id="left_container">
      <?php include("../left_bar.php"); ?>
    </div>
    <!--Sağ tarafta bulunan gövdenin özellikleri içeriği aşağıda verilmiştir.-->
    <?php include ("../../../contact/contact.php"); ?>

    <div id="right_container">
        <div id="bayi_add_form_div">
          <h1>Bayi Ekleme</h1>
          <form action="#" method="post" id="bayi_add_form">
            <h4>lütfen türkçe karakter kullanmayın</h4>
            <input type="text" id="bayi_town" name="bayi_town" placeholder="Bayi Sehiri">
            <input type="text" id="depo_town" name="depo_town" placeholder="bağlı olduğu depo">
            <input type="submit" value="Ekle" id='dealer_add_button'>
          </form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


 $bayisehir= $_POST['bayi_town'];
  $bayidepo= $_POST['depo_town'];

// $bayidepo'ya göre depo_id'yi al
$depo_id_sorgu = "SELECT depo_id FROM depo WHERE sehir = '$bayidepo'";
$depo_id_sonuc = mysqli_query($connection, $depo_id_sorgu);

if(mysqli_num_rows($depo_id_sonuc) > 0) {
    $row = mysqli_fetch_assoc($depo_id_sonuc);
    $depo_idek = $row['depo_id'];

    // Bayi tablosuna $bayidepo ve depo_id'yi ekle
    $bayi_ekle_sorgu = "INSERT INTO bayi (ilce, depo_id) VALUES ('$bayisehir', $depo_idek)";
    
    if (mysqli_query($connection, $bayi_ekle_sorgu)) {
        echo "Bayi başarıyla eklendi.";


   // Kullanıcı tablosuna yeni veri olarak eposta ve şifre ekle
   $email = $bayisehir . "@gmail.com";
   $sifre = $bayisehir;
   $bayi_tip="bayi";
   $kullanici_ekle_sorgu = "INSERT INTO kullanici (email,hesap_tipi,sifre) VALUES ('$email','$bayi_tip','$sifre')";

   if (mysqli_query($connection, $kullanici_ekle_sorgu)) {
       echo "hesap başarıyla eklendi:"." $email"." şifreniz:"."$sifre";
   } 
   
   else {
       echo "hesap ekleme hatası: " . mysqli_error($connection);
   }

    } 
    
    else {
        echo "Hata: " . mysqli_error($connection);
    }
} 
else {
  echo "Depo bulunamadı.";
}

}
?>
     </div>
    </div>
  </div>
</body>

</html>