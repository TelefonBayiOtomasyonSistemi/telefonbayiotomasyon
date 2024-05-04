

//ürün sayfasına gitme kodu
function go_products(id) {
  var telefonID = id; // Buton ID'sinden telefon ID'sini alıyoruz
  var url = "http://localhost/Kodlar/php/products/features_product.php?id=" + telefonID;
  window.location.href = url; // Yeni URL'ye yönlendirme işlemi
}
//4 Tane dosya yüklenmesini kontrol eder....
function checkFileCount(input) {
    // Seçilen dosyaların sayısını kontrol et
    if (input.files.length > 4 || input.files.length<4) {
        alert("Sadece 4 dosya seçebilirsiniz.");
        // Dosya seçimini temizle
        input.value = "";
    }
}


document.getElementById("register_form").addEventListener("submit", function (event) {
  event.preventDefault(); // Formun normal gönderimini engelle

  // Formdan gelen verileri alma
  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value;
  var email = document.getElementById("email").value;
  var adres = document.getElementById("phone").value;
  var password = document.getElementById("password").value;
  var birthday = document.getElementById("birthday").value;
  var hesap_tipi = document.getElementById("hesap_tipi").value;

  // AJAX kullanarak formu gönder
  var xhr = new XMLHttpRequest();
  var url = "../contact/add_acount.php"; // Formun gönderileceği PHP dosyasının adı

  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          alert(xhr.responseText); // Sunucudan gelen cevabı göster
      }
  };

  var params = "register_name=" + name + "&register_surname=" + surname + "&register_email=" + email + "&register_adres=" + adres + "&register_password=" + password + "&register_birthday=" + birthday + "&hesap_tipi=" + hesap_tipi;
  xhr.send(params);
});