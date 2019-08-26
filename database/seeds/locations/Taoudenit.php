<?php

$taoudenit = ['parent_id' => null,  'name' => 'Taoudenit', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

$cercleFoumAlba = [ 'name' => 'Foum Alba', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleAchouratt = [ 'name' => 'Achouratt', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleAlOurche = [ 'name' => 'Al-Ourche', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleBoudjeBeha = [ 'name' => 'TBoudje-Béha', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

$cercles = [ $cercleFoumAlba, $cercleAchouratt, $cercleAlOurche, $cercleBoudjeBeha];
$taoudenit['cercles'] = $cercles;
return $taoudenit;
