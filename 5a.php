<?php
$Tomodachi = [
    [
        "NRP" => "223040021",
        "NAMA" => "MUHAMMAD FAUZAN DWI",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "ojannn@gmail.com",
        "NO HP" => "08394723749",
        "FOTO"  => "fauzan.jpeg"
    ],
    [
        "NRP" => "223043292",
        "NAMA" => "NOVAN RAMDAN",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "nopann@gmail.com",
        "NO HP" => "083947232348",
        "FOTO"  => "novan.jpg"
    ],
    [
        "NRP" => "223043423",
        "NAMA" => "RAMA DHANIAJI REFIN",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "repinn@gmail.com",
        "NO HP" => "083947233829",
        "FOTO"  => "refin.jpeg"
    ],
    [
        "NRP" => "223391844",
        "NAMA" => "MUHAMMAD DAFFA",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "dannn@gmail.com",
        "NO HP" => "08394333929",
        "FOTO"  => "daffa.jpg"
    ],
    [
        "NRP" => "22339432475",
        "NAMA" => "DIMAS HIDAYATULLOH",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "dimasss@gmail.com",
        "NO HP" => "08394393841",
        "FOTO"  => "dimas.jpg"
    ],
    [
        "NRP" => "223394391836",
        "NAMA" => "BINTANG ARYA",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "bintanggg@gmail.com",
        "NO HP" => "083943932389",
        "FOTO"  => "bintang1.jpg"
    ],
    [
        "NRP" => "223392387",
        "NAMA" => "DIAZ ALFIARI RACHMAD",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "diazzzz@gmail.com",
        "NO HP" => "08394298028",
        "FOTO"  => "diaz.jpeg"
    ],
    [
        "NRP" => "2233922938",
        "NAMA" => "AHMAD MULIA HUDA",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "ahmaddd@gmail.com",
        "NO HP" => "083942938428",
        "FOTO"  => "ahmad.jpeg"
    ],
    [
        "NRP" => "22339389",
        "NAMA" => "HIKMAL RYVALDI PELU",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "mallll@gmail.com",
        "NO HP" => "0832988428",
        "FOTO"  => "hikmal.jpeg"
    ],
    [
        "NRP" => "22313393810",
        "NAMA" => "PRAMUDYA DIMAS WILANDA",
        "JURUSAN" => "TEKNIK INFORMATIKA",
        "EMAIL" => "prasss@gmail.com",
        "NO HP" => "083292938428",
        "FOTO"  => "pras.jpeg"
    ]
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas array associative</title>

<body>
    <h1>Tomodachi</h1>

    <?php foreach ($Tomodachi as $tomo) : ?>

        <ul>
            <li class="gambar">
                <img src="img/<?= $tomo["FOTO"]; ?>">
            </li>
            <li>NRP : <?= $tomo["NRP"];  ?></li>
            <li>NAMA : <?= $tomo["NAMA"];  ?></li>
            <li>JURUSAN : <?= $tomo["JURUSAN"];  ?></li>
            <li>EMAIL : <?= $tomo["EMAIL"];  ?></li>
            <li>NO HP : <?= $tomo["NO HP"];  ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>