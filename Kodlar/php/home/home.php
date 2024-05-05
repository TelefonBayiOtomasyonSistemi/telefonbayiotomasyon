<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css\home.css">
</head>

<body>
    <?php include '../navbar/navbar.php' ?>

    <div>
        <div id="banner_div">
            <h1></h1>
    </div>
    <div id="products_body_div">
            
        <?php include '../contact/contact.php';
        $query = mysqli_query($connection, 'select * from telefon limit 8');
        while ($take = mysqli_fetch_array($query)) {

            $id = $take["telefon_id"];
            $marka = $take["marka"];
            $model = $take["model"];
            $fiyat = $take["fiyat"];
            //resimleri alma kodu
            $query_resim = mysqli_query($connection, 'select * from resimler where id="' . $id . '"');
            $resim_row = mysqli_fetch_array($query_resim);
                    $resim = $resim_row['resim1'];
            $html = '<div id="card' . $id . '" class="card">
                    <img src=' . $resim . ' alt="' . $model . '">
                    <h3>' . $model . '</h3>
                    <p>' . $marka . ' GB</p>
                    <h3 id="product_fiyat">' . $fiyat . ' TL</h3>
                </div>';
            echo $html;
        }
        ?>
    </div>
    <footer>
        <?php
        include '../footer/footer.php';
        ?>
    </footer>

    <script src="../../js/products.js">
    </script>
</body>

</html>