<?php

$gao = ['parent_id' => null, 'name' => 'gao', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

$cercleAnsongo = ['name' => 'Ansongo', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleBourem = ['name' => 'Bourem', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleGao = ['name' => 'gao', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

#region communes of ansongo
$ansongoCAnsongo = ['name' => 'Ansongo', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$ansongoCBara = ['name' => 'Bara', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$ansongoCBoura = ['name' => 'Boura Ansongo', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$ansongoCOuattagouna = ['name' => 'Ouattagouna', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$ansongoCTalataye= ['name' => 'Talataye', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$ansongoCTessit = ['name' => 'Tessit', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$ansongoCTinHama = ['name' => 'Tin-Hama', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleAnsongo['communes'] = [$ansongoCAnsongo, $ansongoCBara, $ansongoCBoura, $ansongoCOuattagouna,$ansongoCTalataye,$ansongoCTessit,$ansongoCTinHama];
#endregion communes of ansongo

#region communes of bourem
$bouremCBamba = ['name' => 'Bamba Bourem', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$bouremCBourem = ['name' => 'Bourem', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$bouremCTaboye = ['name' => 'Taboye', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$bouremCTarkint = ['name' => 'Tarkint', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$bouremCTemera= ['name' => 'Téméra', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleBourem['communes'] = [$bouremCBamba, $bouremCBourem, $bouremCTaboye, $bouremCTarkint,$bouremCTemera];
#endregion communes of bourem

#region communes of gao
$gaoCAnchawad = ['name' => 'Anchawad', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$gaoCGabero = ['name' => 'Gabéro', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$gaoCGao = ['name' => 'Gao', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$gaoCGounzoureye = ['name' => 'Gounzoureye', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$gaoCNtillit= ['name' => 'N Tillit', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$gaoCSoniAliBer = ['name' => 'Soni Ali Ber', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$gaoCTilemsi = ['name' => 'Tilemsi Gao', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleGao['communes'] = [$gaoCAnchawad, $gaoCGabero, $gaoCGao, $gaoCGounzoureye, $gaoCNtillit, $gaoCSoniAliBer, $gaoCTilemsi];
#endregion communes of gao

$cercles = [ $cercleAnsongo, $cercleBourem, $cercleGao];
$gao['cercles'] = $cercles;
return $gao;
