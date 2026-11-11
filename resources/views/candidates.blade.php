<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кандидаты</title>
</head>
<body>
<h2>Список кандидатов</h2>
<table border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>ФИО кандидата</td>
        <td>Кампания</td>
        <td>Действия</td>
    </tr>
    </thead>
    @foreach ($candidates as $candidate)
        <tr>
            <td>{{$candidate->id}}</td>
            <td>{{$candidate->full_name}}</td>
            <td>{{$candidate->campaign->name}}</td>
            <td><a href="{{url('candidate/destroy/'.$candidate->id)}}">Удалить</a>
                <a href="{{url('candidate/edit/'.$candidate->id)}}">Редактировать</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>