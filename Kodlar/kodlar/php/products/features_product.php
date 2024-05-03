<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css\features_product.css">
</head>

<body>
    <?php
    include ("../navbar/navbar.php");
    ?>
    <div id="product_info_div">
        <div id="product_pictures_div">
            <div id="top_pictures">
                <img src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihZH5DbGgFGsEkAAS5VOlKEalqzeoSUSQM8ok-Xpvbw1ifKMTVs9Fyw4fhsVcdQF9kC5P_fvcWBePf1rQiV2MdjmH9lb1ge5fQ=w1920-h957-rw-v1"
                    id="main_pictures_img">
            </div>
            <div id="bottom_pictures">
                

            </div>
        </div>
        <div id="product_explain_div">
            <!--Veri alma -->
            <?php
            include ("../contact/contact.php");

            $phoneID = $_GET['id'];
            $sql = mysqli_query($connection, "select * from telefonlar where id ='$phoneID'");


            while ($take = mysqli_fetch_array($sql)) {
                $id = $take["id"];
                $ad = $take["isim"];
                $ram = $take["ram"];
                $ekran_boyutu = $take["ekran_boyutu"];
                $hafiza = $take["hafiza"];
                $uretici = $take["uretici"];
                $fiyat = $take["fiyat"];
                $satici = $take["satici"];
                $islemci = $take["islemci"];
                $pilGucu = $take["pil_kapasitesi"];
                $html = '<div id="product_details">
                            <h3>' . $ad . '</h3>
                            <div id="satici_bilgi">
                                <h3>SATICI:   ' . $satici . '
                                </h3>
                            </div> 
                            <div id="urun_ozellik_div">
                            <h3>ÜRÜN ÖZELLİKLERİ</h3> 
                            <p><b> DAHİLİ HAFIZA: </b> ' . $hafiza . ' GB</p>
                            <p><b> RAM KAPASİTESİ: </b> ' . $ram . ' GB</p>
                            <p><b> EKRAN BOYUTU: </b> ' . $ekran_boyutu . ' inç</p>
                            <p><b> PİL GÜCÜ: </b> ' . $pilGucu . ' maH</p>
                            <p><b> ISLEMCI: </b> ' . $islemci . '</p>
                            </div>
                            <h1>' . $fiyat . ' TL</h1>
                            <input type="number" name="adet" min="1" max="10" value="1" id="eklenecek_adet">
                            <button id="sepete_ekle_button" onclick="add_list()"> <b>SEPETE EKLE</b></button>
                        </div>';
                echo $html;
            }



            ?>

        </div>
    </div>
    <script src="../../js/features_product.js"></script>
</body>

</html>