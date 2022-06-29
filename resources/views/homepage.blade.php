<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Laravel Treni</title>
</head>
<body>
    <div class="container">
        <h2>Treni di oggi</h2>
        @foreach ($trains as $train)
            <div class="card">
               <h3>Treno {{$train->operator}} {{ $train->train_code }}</h3>
               <p><strong>Partenza:</strong> {{ $train->start_station }} ore {{$train->departure_time}}</p>
               <p><strong>Arrivo:</strong> {{ $train->end_station }} ore {{$train->arrival_time}}</p>
            </div>
        @endforeach

    </div>
</body>
</html>