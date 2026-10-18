<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Избирательные кампании</title>
</head>
<body>
    <h1>Избирательные кампании</h1>
    <ul>
        @foreach ($campaigns as $campaign)
            <li>
                <a href="/election_campaign/{{ $campaign->id }}">
                    {{ $campaign->name }} — дата выборов: {{ $campaign->election_date }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>