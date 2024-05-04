<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css\products.css">
</head>

<body>
    <?php include '../navbar/navbar.php' ?>

    <div id="products_body_div">
        
        <?php include '../contact/contact.php';
        $query = mysqli_query($connection, 'select * from telefon limit 8');
        $i = 1;
        $fiyat = 56000;
        $resim = "https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihaXR3FBdU0SUTD32FLQzbIjE1zl-XRtNmtvOlUqYmSeS3gMekxm5XQoJdU70F_Yhnb8wDIfLYlyqAGcdeGRimKAnDxpqr0Yv2w=w1920-h957-rw-v1";
        while ($take = mysqli_fetch_array($query)) {
            $id = $take["telefon_id"];
            $marka = $take["marka"];
            $model = $take["model"];
            $fiyat = $take["fiyat"];
            //$kamera = $take["kamera"];
            $html = '<div id="card' . $i . '" class="card">
                    <img src=' . $resim . ' alt="' . $model . '">
                    <h3>' . $model . '</h3>
                    <p>' . $marka . ' GB</p>
                    <h3 id="product_fiyat">' . $fiyat . ' TL</h3>
                </div>';
            echo $html;
            $i++;
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