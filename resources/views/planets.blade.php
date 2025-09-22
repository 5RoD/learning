<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <style>
        body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; margin: 2rem; }
        h1 { margin-bottom: 1rem; }
        ul { list-style: disc; padding-left: 1.5rem; }
        li { margin-bottom: 1rem; }
        .name { font-weight: 600; }
        .description { color: #333; }
    </style>
    </head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <div class="name">{{ $planet['name'] }}</div>
                <div class="description">{{ $planet['description'] }}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>


