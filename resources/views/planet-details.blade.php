<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planet['name'] }} - Planet Details</title>
    <style>
        body { 
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; 
            margin: 2rem; 
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 { 
            color: #2563eb;
            margin-bottom: 1rem; 
        }
        .planet-info {
            background: #f8fafc;
            padding: 2rem;
            border-radius: 8px;
            border-left: 4px solid #2563eb;
        }
        .planet-name {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #1e293b;
        }
        .planet-description {
            font-size: 1.1rem;
            color: #475569;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 2rem;
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/planets" class="back-link">← Back to all planets</a>
        
        <div class="planet-info">
            <h1 class="planet-name">{{ $planet['name'] }}</h1>
            <p class="planet-description">{{ $planet['description'] }}</p>
        </div>
    </div>
</body>
</html>
