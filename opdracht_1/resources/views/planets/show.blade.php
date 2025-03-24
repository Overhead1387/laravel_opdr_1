<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planet->name }}</title>
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
        .planet-details {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #0066cc;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="planet-details">
        <h1>{{ $planet->name }}</h1>
        <p><strong>Description:</strong> {{ $planet->description }}</p>
        <p><strong>Size:</strong> {{ number_format($planet->size_in_km) }} km</p>
        <p><strong>Solar System:</strong> {{ $planet->solar_system->name }}</p>
        <p><strong>Galaxy:</strong> {{ $planet->solar_system->galaxy }}</p>
    </div>
    
    <a href="/planets" class="back-link">← Back to all planets</a>
</body>
</html>