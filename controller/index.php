<?php
require_once('../model/Weather.php');
require_once('../model/FluxRSS.php');

$myweather = new Weather();
$myweather->setCity('Saint Etienne');
$myweather->setNbDay(5);    #max -> 7
$today = $myweather->getCurrentWeather();
$later = $myweather->getWeeklyWeather();


$monFlux = new FluxRSS();
$monFlux->setFile('http://www.lemonde.fr/rss/une.xml');
$dataLaUneRSS = $monFlux->readRSS();
/*
$monFluxgeek = new FluxRSS();
$monFluxgeek->setFile('http://www.presse-citron.net/feed/');
$dataGeekRSS = $monFluxgeek->readRSS();
*/
require_once('../view/demo/hub.php');

?>