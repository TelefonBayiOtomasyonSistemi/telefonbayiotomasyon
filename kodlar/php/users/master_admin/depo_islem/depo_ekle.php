<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../../css/master_admin.css">
  <style>
    #warehouse_add_form {
      display: inline;
      margin: auto;
      width: 400px;
    }

    #warehouse_add_form button {
      width: 100px;
      height: 35px;
      background-color: #a8ffae;
      border-radius: 5px;
      border: 2px solid #3c8340;
      margin: auto;
      font-weight: bold;
    }
  </style>
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
        <div id="warehouse_add_form_div">
          <h1>Depo Ekleme</h1>
          <form action="#" method="post" id="warehouse_add_form">
            <input type="text" id="warehouse_town" name="warehouse_town" placeholder="Depo Sehiri">

            <input type="submit" value="Ekle">
          </form>

        </div>
      </div>
    </div>
  </div>
</body>

</html>