<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .card{
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            width: 200px;
            text-align: center;
            box-sizing: border-box;
        }

        .card img{
            max-width: 100%;
            border-radius: 8px;
        }

        .card h3{
            margin-top: 8px;
        }
    </style>
</head>
<body>
<div class="container">
    @foreach ($processors as $processor)
        <div class="card">
            <h3>{{ $processor['name'] }}</h3>
            <img src="{{ $processor['imageUrl'] }}" alt="imagem">
            <h3>Marca:{{$processor['brand']}}</h3>
            <h3>Tipo de Soquete:{{$processor['socket']}} </h3>
            <h3>Qnt. Núcleos físicos:{{$processor['cores']}} </h3>
            <h3>Frequencia base:{{$processor['baseFrequency']}} <br> Frequencia max:{{$processor['maxFrequency']}}</h3>
            <h3>Qnt.Cache:{{$processor['cacheMemory']}}<br> TDP:{{$processor['tdp']}}</h3>
        </div>
    @endforeach

</div>
</body>
</html>
