<?php
if ($_GET['city']) {
	$_GET['city'] = str_replace(' ', '', $_GET['city']);
	$city = preg_replace("/[^a-zA-Z\s]/", "", $_GET['city']);
	$forecastPage = file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	$pageArray = explode('<p class="b-forecast__table-description-content"><span class="phrase">', $forecastPage);
	$secondPageArray = explode('</span></p>', $pageArray[1]);
	$weather = $secondPageArray[0];
}
?>
