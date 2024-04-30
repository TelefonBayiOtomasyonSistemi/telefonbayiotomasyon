<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "products"; // Veritabanı adı
$dbtable = "users"; // Tablo adı

// Bağlantıyı oluştur
$dbConn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Bağlantı hatası kontrolü
if (!$dbConn) {
    die("Bağlantı kurulamadı: " . mysqli_connect_error());
}

// Formdan gelen verileri alma
$name = $_POST["register_name"];
$surname = $_POST["register_surname"];
$email = $_POST["register_email"];
$phone = $_POST["register_phone"];
$password = $_POST["register_password"];
$birthday = $_POST["register_birthday"];
$gender = $_POST["register_gender"];



// Şifreyi hashleme
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// Kayıt sorgusu
$sql = "INSERT INTO $dbtable (name, surname, email, phone, password, birthday, gender) VALUES ('$name', '$surname', '$email', '$phone', '$hashedPassword', '$birthday', '$gender')";

// Sorgunun çalıştırılması
if (mysqli_query($dbConn, $sql)) {
    echo "Kayıt işlemi başarılı!";
} else {
    echo "Kayıt işlemi başarısız: " . mysqli_error($dbConn);
}

// Bağlantıyı kapatma
mysqli_close($dbConn);
?>