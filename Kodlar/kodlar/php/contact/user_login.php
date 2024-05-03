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

// Kullanıcı var mı kontrol et
if ($result->num_rows > 0) {
    // Kullanıcıyı giriş sayfasına yönlendir
    echo "<script>alert('Giriş başarılı! Anasayfaya yönlendiriliyorsunuz...');</script>";
    echo "<script>setTimeout(function() { window.location.href = '../home/home.php'; }, );</script>";
    exit();
} else {
    // Giriş başarısız ise, kullanıcıyı tekrar giriş sayfasına yönlendir
    echo "<script>alert('Hatalı Giriş!');</script>";
    echo "<script>setTimeout(function() { window.location.href = '../login/login.php'; }, );</script>";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
