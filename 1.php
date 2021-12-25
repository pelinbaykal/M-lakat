<?php

/*
* Aşağıdaki diziyi responseType'ı değiştirerek farklı responselar çıktılayın.
* Genişletilebilir ve tekrar kullanıma açık olmalı.
* Interface kullanımı zorunludur.
*/


$responseType = "json"; // json veya xml

$data = [
    [
        "name" => "ürün 1",
        "price" => 101.01,
        "image" => "image.jpg"
    ],
    [
        "name" => "ürün 2",
        "price" => 103.22,
        "image" => "image.jpg"
    ],
    [
        "name" => "ürün 3",
        "price" => 99.99,
        "image" => "image.jpg"
    ],
    [
        "name" => "ürün 4",
        "price" => 87.6665,
        "image" => "image.jpg"
    ]
];

/*<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

</head> */
<body>
        <div class="content">
           
            <form action="" method="post">
                   Name: <input type="text" name="name" placeholder="Name">
                   Price:<input type="number" name="price"  placeholder="Price">
                   İmage:<input type="text" name="image"  placeholder="İmage">
                    <input type="submit" name="submit" value="Gönder" />
            </form>
            <?php
            if(@$_POST["submit"])
            {
                $data=array(
                    "name" =>$_POST["name"],
                    "price" =>$_POST["price"],
                    "image" =>$_POST["image"],
                );
                $json = json_encode($data);
                    echo "<hr>Json Deconde </br>";
                echo $json;
            }
            
            ?>
        </div>
</body>
</html>

