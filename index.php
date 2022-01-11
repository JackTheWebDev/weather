<?php

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

app()->template->config("path", "templates");


app()->get("/", function () {


	echo app()->template->render("index");
});

app()->post("/weather",function(){
	$cityname = request()->get("city");

	$apiKey = $_ENV["api_key"];
	$url = "https://api.openweathermap.org/data/2.5/weather?q={$cityname}&appid={$apiKey}&units=imperial";

	$response = file_get_contents($url);
	$json = json_decode($response,true);

	$data = [
		"status"=>"success",
		"weather"=>$json
	];


	response($data);
});

app()->get("/map",function(){
	$lat = request()->get("lat");
	$lon = request()->get("lon");

	$mapKey = $_ENV["mapApiKey"];

	$mapUrl = "http://www.mapquestapi.com/staticmap/v4/getmap?key={$mapKey}&center={$lat},{$lon}&zoom=9&size=500,300";


	$image = file_get_contents($mapUrl);

	header('Content-Type: image/png');

	echo $image;
});


app()->run();
