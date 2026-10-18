<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Участок № {{ $station->station_number }}</title>
</head>
<body>
    <h1>Избирательный участок № {{ $station->station_number }}</h1>
    <p>Регион: <b>{{ $station->region->name }}</b></p>
    <p>Число избирателей: <b>{{ $station->voter_count }}</b></p>

    <h2>Кандидаты и результаты голосования на участке</h2>
    <table border="1" cellpadding="8">
        <tr><th>№</th><th>ФИО кандидата</th><th>Голосов</th></tr>
        @foreach ($station->candidates as $candidate)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="/candidate/{{ $candidate->id }}">{{ $candidate->full_name }}</a></td>
                <td>{{ $candidate->pivot->vote_count }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>