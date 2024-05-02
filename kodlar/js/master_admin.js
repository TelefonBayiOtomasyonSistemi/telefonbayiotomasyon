// Divler
var productsSearchDiv = document.getElementById("products_search");
var productsInfoDiv = document.getElementById("products_info_divs");
var productsSettingsDiv = document.getElementById("products_settings_divs");
var productsAddDiv = document.getElementById("products_add_divs");
var productsDeleteDiv = document.getElementById("products_delete_divs");
var main_message = document.getElementById("main_message");

//FONKSİYONLAR
function displayNone() {
  productsSearchDiv.style.display = "none";
  productsInfoDiv.style.display = "none";
  productsSettingsDiv.style.display = "none";
  productsAddDiv.style.display = "none";
  productsDeleteDiv.style.display = "none";
}
displayNone();
function sub_search(event) {
  var search_id = document.getElementById("search_id").value.trim();
  var search_name = document.getElementById("search_name").value.trim();

  // Her iki input da boşsa hata mesajı göster
  if (search_id === "" && search_name === "") {
    alert("Ürün ID veya Ürün Adı girin.");
    event.preventDefault(); // Formun submit işlemini engelle
  }
}

document
  .getElementById("search_info_form")
  .addEventListener("submit", sub_search);

function showPhones() {
  displayNone();
  first_load();
  productsSearchDiv.style.display = "block";
  productsInfoDiv.style.display = "block";
}

function showFixPhone() {
  showPhones();
  productsSearchDiv.style.display = "block";
  productsSettingsDiv.style.display = "block";
}

function showAddPhone() {
  showPhones();
  productsSearchDiv.style.display = "block";
  productsAddDiv.style.display = "block";
}

function showDelPhone() {
  showPhones();
  productsSearchDiv.style.display = "block";
  productsDeleteDiv.style.display = "block";
}

function go_products(button) {
  var id = button.id.split("_")[3];
}

function silmeOnayi() {}

function iptal() {}


var start_div = document.getElementById("start_div");
function first_load(){
    start_div.style.display = "none";
}
