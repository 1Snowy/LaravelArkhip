<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кандидаты</title>
    <style> .is-invalid { color: red; }  </style>
</head>
<body>
<h2>Добавление кандидата</h2>
<form method="post" action="{{url('candidate')}}">
    @csrf
    <label>ФИО кандидата</label>
    <input type="text" name="full_name" value="{{ old('full_name') }}"/>
    @error('full_name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Кампания:</label>
    <select name="campaign_id" value="{{ old('campaign_id') }}">
        <option style="display:none"></option>
        @foreach ($campaigns as $campaign)
            <option value="{{$campaign->id}}"
                @if(old('campaign_id') == $campaign->id) selected
                @endif>{{$campaign->name}}
            </option>
        @endforeach
    </select>
    @error('campaign_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <input type="submit">
</form>
</body>
</html>