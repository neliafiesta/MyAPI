<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Information Search</title>
    <style>
        body {
            font-family: Georgia;
            background-color: lightblue;
            margin: 50;
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
        form {
            text-align: center;
            margin-top: 20px;
            
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            font: black;
            border: 1px solid black;
            border-radius: 20px;
            width: 300px;
        
        }
    
        button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            
            background-color:  lightgreen;
            color: black;
            border: 1px solid black;
            border-radius: 15px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: green;
        }
        .search-info {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
           
        }
        .not-found {
            color: red;
        }
    </style>
</head>
<body>
<div class="search-info">
        <h2>Pokémon Information</h2>
        <form method="post" action="/pokemon">
            @csrf
            <input type="text" name="pokemon" placeholder="Enter Pokémon name or ID">
            <button type="submit">Search Pokémon</button>
        </form>
      
    </div>

    @if(Session::has('error'))
        <div class="search-info">
            <h2 class="not-found">{{ Session::get('error') }}</h2>
        </div>
    @endif
    <!-- Closing div for the search information -->
</body>

</html>
