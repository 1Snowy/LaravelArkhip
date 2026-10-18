<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $candidate->full_name }}</title>
</head>
<body>
    <h1>Кандидат: {{ $candidate->full_name }}</h1>
    <p>Кампания: <b>{{ $candidate->campaign->name }}</b></p>

    <h2>Результаты кандидата по участкам</h2>
    <table border="1" cellpadding="8">
        <tr><th>№ участка</th><th>Регион</th><th>Голосов</th></tr>
        @foreach ($candidate->pollingStations as $station)
            <tr>
                <td><a href="/polling_station/{{ $station->id }}">{{ $station->station_number }}</a></td>
                <td>{{ $station->region->name }}</td>
                <td>{{ $station->pivot->vote_count }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>