<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .planet-list {
            list-style: none;
            padding: 0;
        }
        .planet-item {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .planet-item a {
            color: #0066cc;
            text-decoration: none;
            font-weight: bold;
        }
        .planet-item a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>All Planets</h1>
    
    <ul class="planet-list">
        @foreach($planets as $planet)
            <li class="planet-item">
                <a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a>
                <p>{{ $planet->description }}</p>
                <p>Size: {{ number_format($planet->size_in_km) }} km</p>
                <p>Solar System: {{ $planet->solar_system->name }} ({{ $planet->solar_system->galaxy }})</p>
            </li>
        @endforeach
    </ul>
</body>
</html>