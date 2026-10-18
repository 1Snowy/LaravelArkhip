<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $campaign->name }}</title>
</head>
<body>
    <h1>Кампания: {{ $campaign->name }}</h1>
    <p>Дата выборов: <b>{{ $campaign->election_date }}</b></p>

    <h2>Кандидаты кампании</h2>
    <ul>
        @foreach ($campaign->candidates as $candidate)
            <li><a href="/candidate/{{ $candidate->id }}">{{ $candidate->full_name }}</a></li>
        @endforeach
    </ul>
</body>
</html>