<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $region->name }}</title>
</head>
<body>
    <h1>Регион: {{ $region->name }}</h1>

    <h2>Избирательные участки региона</h2>
    <table border="1" cellpadding="8">
        <tr><th>№ участка</th><th>Число избирателей</th></tr>
        @foreach ($region->pollingStations as $station)
            <tr>
                <td><a href="/polling_station/{{ $station->id }}">{{ $station->station_number }}</a></td>
                <td>{{ $station->voter_count }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
