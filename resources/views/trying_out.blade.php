<?php

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://football98.p.rapidapi.com/premierleague/news', [
	'headers' => [
		'X-RapidAPI-Host' => 'football98.p.rapidapi.com',
		'X-RapidAPI-Key' => '334895b415msh5a37e5abb77e199p1cc643jsnf604440e8931',
	],
]);

echo $response->getBody();