<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регионы</title>
</head>
<body>
    <h1>Регионы</h1>
    <ul>
        @foreach ($regions as $region)
            <li>
                <a href="/region/{{ $region->id }}">{{ $region->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>