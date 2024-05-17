<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Information</title>
    <style>
        body {
            font-family: Georgia;
            background-color: lightblue;
            margin: 20;
            padding: 100px;

        }
        h2 {
            text-align: center;
            margin-top: 20px;
            background-color: white;
            border: 2px solid black;
            border-radius: 15px;
            padding: 10px;
        }
        .pokemon-info {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.8);
        }
        img {
            max-width: 200px;
            height: auto;
            margin-top: 10px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 5px;
        }
        .search-again-button {
            text-align: center;
            margin-top: 20px;
        }
        .search-again-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: lightgreen; 
            color: black;
            border: 1px solid #0a0909;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.8);
        }
        .search-again-button button:hover {
            background-color: green; 
        }
    </style>
</head>
<body>
    <!-- Check if the $pokemon variable is set and not null -->
    @if(isset($pokemon))
        <!-- Container for displaying Pokemon information -->
        <div class="pokemon-info">
            <!-- Display the name of the Pokemon -->
            <h1>{{$pokemon['name']}}</h1>
            <!-- Display an image of the Pokemon -->
            <img src="{{$pokemon['sprites']['front_default']}}" alt="{{$pokemon['name']}}">
            <!-- Display the height of the Pokemon -->
            <p>Height: {{$pokemon['height']}}</p>
            <!-- Display the weight of the Pokemon -->
            <p>Weight: {{$pokemon['weight']}}</p>
            <!-- Display a list of the Pokemon's abilities -->
            <p>Abilities:</p>
            <ul>
                <!-- Loop through each ability and display it as a list item -->
                @foreach($pokemon['abilities'] as $ability)
                    <li>{{$ability['ability']['name']}}</li>
                @endforeach
            </ul>
        </div>
        <!-- Container for the search again button -->
        <div class="search-again-button">
            <!-- Form to submit the search again action -->
            <form method="get" action="{{ route('search') }}">
                <!-- Submit button to go back to search page -->
                <button type="submit">Search Again</button>
            </form>
        </div>

     @endif
</body>

</body>
</html>
