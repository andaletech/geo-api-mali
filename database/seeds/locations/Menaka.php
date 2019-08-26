<?php

$menaka = ['parent_id' => null,  'name' => 'Menaka', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

$cercleMenaka = [ 'name' => 'Ménaka', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleAnderamboukane = [ 'name' => 'Andéramboukane', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleInekar = [ 'name' => 'Inékar', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];
$cercleTidermene = [ 'name' => 'Tidermène', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null ];

#region communes of Ménaka
$menakaCAlata = [ 'name' => 'Alata', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$menakaCAnderamboukane = [ 'name' => 'Andéramboukane', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$menakaCInekar = [ 'name' => 'Inékar', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$menakaCMenaka = [ 'name' => 'Ménaka', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];
$menakaCTidermene = [ 'name' => 'Tidermène', 'population' => null, 'area' => null, 'extra' => null, 'longitude' => null, 'latitude' => null];

$cercleMenaka['communes'] = [$menakaCAlata, $menakaCAnderamboukane, $menakaCInekar, $menakaCMenaka, $menakaCTidermene];
#endregion communes of Ménaka

$cercles = [ $cercleMenaka, $cercleAnderamboukane, $cercleInekar, $cercleTidermene];
$menaka['cercles'] = $cercles;
return $menaka;
