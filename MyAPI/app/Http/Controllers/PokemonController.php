<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Session;

class PokemonController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function getPokemon(Request $request)
    {
        // Validate the input
        $request->validate([
            'pokemon' => 'required|string', // Ensure 'pokemon' parameter is present and is a string
        ]);
    
        // Retrieve the 'pokemon' parameter from the request
        $pokemonName = $request->input('pokemon');
    
        $client = new Client();
        
        try {
            // Make the request to the Pokémon API
            $response = $client->request('GET', "https://pokeapi.co/api/v2/pokemon/$pokemonName");
            
            // Decode the response body
            $pokemonData = json_decode($response->getBody(), true);
    
            // Check if the Pokémon data is empty or not found
            if (empty($pokemonData)) {
                Session::flash('error', 'Pokemon not found.'); // Store error message in session
                return redirect()->route('search'); // Redirect to search page
            }
            
            // Return the view with the Pokémon data
            return view('pokemon')->with('pokemon', $pokemonData);
        } 
            catch (\Exception $e) {
            Session::flash('error', 'Failed to fetch Pokemon data. Please try again later.'); // Store error message in session
            return redirect()->route('search'); // Redirect to search page
        }
    }
}    