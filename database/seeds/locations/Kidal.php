<?php

$kidal = ['parent_id' => null,  'name' => 'Kidal', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

$cercleAbeibara = [ 'name' => 'Abeïbara', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleKidal = [ 'name' => 'Kidal', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleTessalit = [ 'name' => 'Tessalit', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleTinEssako = [ 'name' => 'Tin-Essako', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

#region communes of Abeïbara
$abeibaraCAbeibara = [ 'name' => 'Abeïbara', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$abeibaraCBoghassa = [ 'name' => 'Boghassa', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$abeibaraCTinzawatene = [ 'name' => 'Tinzawatène', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleAbeibara['communes'] = [$abeibaraCAbeibara, $abeibaraCBoghassa, $abeibaraCTinzawatene];
#endregion communes of Abeïbara

#region communes of kidal
$kidalCAnefif = [ 'name' => 'Anéfif', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$kidalCEssouk = [ 'name' => 'Essouk', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$kidalCKidal = [ 'name' => 'Kidal', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleKidal['communes'] = [$kidalCAnefif, $kidalCEssouk, $kidalCKidal];
#endregion communes of kidal

#region communes of tessalit
$tessalitCAdjelhoc = [ 'name' => 'Adjelhoc', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$tessalitCTessalit = [ 'name' => 'Tessalit', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$tessalitCTimtaghene = [ 'name' => 'Timtaghene', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleTessalit['communes'] = [$tessalitCAdjelhoc, $tessalitCTessalit, $tessalitCTimtaghene];
#endregion communes of tessalit

#region communes of Tin-Essako
$tinEssakoCIntadjedite = [ 'name' => 'Intadjedite', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$tinEssakoCTinEssako = [ 'name' => 'Tin-Essako', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleTinEssako['communes'] = [$tinEssakoCIntadjedite, $tinEssakoCTinEssako];
#endregion communes of Tin-Essako

$cercles = [ $cercleAbeibara, $cercleKidal, $cercleTessalit, $cercleTinEssako];
$kidal['cercles'] = $cercles;
return $kidal;
