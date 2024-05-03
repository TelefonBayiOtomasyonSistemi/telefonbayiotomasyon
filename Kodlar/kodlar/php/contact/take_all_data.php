<?php 
    include ("contact.php");

    $query_telefonlar = mysqli_query($connection, 'select * from telefonlar');
        $i = 1;
        while ($take = mysqli_fetch_array($query_telefonlar)) {
            $data = [
              "id" => $take["id"],
              "isim" => $take["isim"],
              "ram" => $take["ram"],
              "ekran_boyutu" => $take["ekran_boyutu"],
              "hafiza" => $take["hafiza"],
              "islemci" => $take["islemci"]
            ];
          
            $all_data[] = $data;
            $i++;
          }
?>