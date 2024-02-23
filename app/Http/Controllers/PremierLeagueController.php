<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PremierLeagueController extends Controller
{
    public function index()
{
    $client = new Client();
    $response = $client->request('GET', 'https://api-football-beta.p.rapidapi.com/leagues', [
        'headers' => [
            'X-RapidAPI-Key' => 'YOUR_RAPIDAPI_KEY',
            'X-RapidAPI-Host' => 'football98.p.rapidapi.com'
        ]
    ]);

    $leagues = json_decode($response->getBody()->getContents(), true);

    // Filtrarea pentru a găsi Premier League în răspunsul primit
    $premierLeague = collect($leagues['response'])->first(function ($league) {
        return $league['league']['name'] === 'Premier League';
    });

    // Verifică dacă Premier League a fost găsită înainte de a trimite datele la view
    if (!$premierLeague) {
        abort(404, 'Premier League not found');
    }

    return view('premier-league', compact('premierLeague'));
}
}
