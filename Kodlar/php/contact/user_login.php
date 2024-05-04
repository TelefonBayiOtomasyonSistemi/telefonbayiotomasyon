<?php
// Kullanıcı bilgilerini al


$email = $_POST['email'];
$sifre = $_POST['password'];


// Veritabanı bağlantısı
$servername = "localhost"; // Veritabanı sunucusu (genellikle localhost)
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$dbname = "telefon_otomasyon"; // Kullanılacak veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısında hata: " . $conn->connect_error);
}

// Kullanıcıyı sorgula
$sql = "SELECT * FROM kullanici WHERE email='$email' AND sifre='$sifre'";
$result = $conn->query($sql);

//hesap tipi sorgulama
$sqlgiris ="SELECT hesap_tipi FROM kullanici WHERE email='$email' AND sifre='$sifre'";
$resultgiris = $conn->query($sqlgiris);

// Kullanıcı var mı kontrol et
if ($result->num_rows > 0) {
    // Kullanıcıyı giriş sayfasına yönlendir
    echo "<script>alert('Giriş başarılı! Anasayfaya yönlendiriliyorsunuz...');</script>";

    if ($resultgiris->num_rows > 0) {
        // Sonuç kümesinde en az bir satır varsa, verileri işle
        while ($row = $resultgiris->fetch_assoc()) {
            // Her satırı işle
            $hesap_tipi =$row["hesap_tipi"] ;
            echo $hesap_tipi;
        }}

if ($hesap_tipi == "müsteri") {
    echo "<script>setTimeout(function() { window.location.href = '../home/home.php'; }, );</script>";
}
else if ($hesap_tipi== "bayi") {
    echo "<script>setTimeout(function() { window.location.href = '../users/satici_admin.php'; }, );</script>";

} 
else if ($hesap_tipi == "admin") {
    echo "<script>setTimeout(function() { window.location.href = '../users/admin.php'; }, );</script>";
}
else{
    echo "<script>alert('böyle bir müşteri bulunmamakta');</script>";
}

exit();
}

else {
    // Giriş başarısız ise, kullanıcıyı tekrar giriş sayfasına yönlendir
    echo "<script>alert('Hatalı Giriş!');</script>";
    echo "<script>setTimeout(function() { window.location.href = '../login/login.php'; }, );</script>";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
