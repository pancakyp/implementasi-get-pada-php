<?php 
//SUPERGLOBAL
//variabel global milik php
//merupakan array associative
// $_GET

$mobil = [
  ['merek' => 'Toyota',
    'model' => 'Yaris',
    'tahun' => 2021,
    'jenis' => 'Hatchback',
    'gambar' => 'yaris.png',
    'mesin' => [
        'tipe' => 'In-line 4 cylinder DOHC',
      'kapasitas' => 1496,
      'tenaga' => 106,
      'torsi' => 140
    ]
  ],
  [
    'merek' => 'Honda',
    'model' => 'City',
    'tahun' => 2021,
    'jenis' => 'Sedan',
    'gambar' => 'city.png',
    'mesin' => [
        'tipe' => 'In-line 4 cylinder SOHC i-VTEC',
      'kapasitas' => 1498,
      'tenaga' => 120,
      'torsi' => 145
    ]  
  ],
  [
     'merek' => 'Mitsubishi',
    'model' => 'Pajero Sport',
    'tahun' => 2021,
    'jenis' => 'SUV',
    'gambar' => 'pajerosport.png',
    'mesin' => [
        'tipe' => 'In-line 4 cylinder DOHC',
      'kapasitas' => 2442,
      'tenaga' => 181,
      'torsi' => 430
    ] 
  ],
  [
     'merek' => 'Nissan',
    'model' => 'Juke',
    'tahun' => 2021,
    'jenis' => 'SUV',
    'gambar' => 'juke.png',
    'mesin' => [
      'tipe' => 'In-line 4 cylinder DOHC',
      'kapasitas' => 1332,
      'tenaga' => 116,
      'torsi' => 148
    ] 
  ],
  [
    'merek' => 'Suzuki',
    'model' => 'Jimny',
    'tahun' => 2021,
    'jenis' => 'SUV',
    'gambar' => 'jimny.png',
    'mesin' => [
      'tipe' => 'In-line 4 cylinder DOHC',
      'kapasitas' => 1462,
      'tenaga' => 102,
      'torsi' => 130
    ]  
  ]
];
?>
<!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET</title>
 </head>
 <body>
 <h1>list Mobil</h1>
 <?php foreach ( $mobil as $mob) : ?>
 <ul>
    <li> 
        <a href="latihan2.php?
        merek=<?= $mob["merek"]; ?>
        &gambar=<?= $mob["gambar"]; ?>
        &model=<?= $mob["model"]; ?>
        &tahun=<?= $mob["tahun"]; ?>
        &jenis=<?= $mob["jenis"]; ?>
        &tipe=<?= $mob["mesin"]["tipe"]; ?>
        &kapasitas=<?= $mob["mesin"]["kapasitas"]; ?>
        &tenaga=<?= $mob["mesin"]["tenaga"]; ?>
        &torsi=<?= $mob["mesin"]["torsi"]; ?>
        "><?= $mob["merek"]; ?></a> 
    </li>
    </ul>
 <?php endforeach ?>
 </body>
 </html>

