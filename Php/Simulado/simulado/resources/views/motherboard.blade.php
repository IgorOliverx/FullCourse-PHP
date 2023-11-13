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
    @foreach ($motherboards as $motherboard)
        <div class="card">
            <h3>{{ $motherboard['name'] }}</h3>
            <img src="{{ $motherboard['imageUrl'] }}" alt="imagem">
            <h3>Marca:{{$motherboard['brand']}}</h3>
            <h3>Tipo de soquete:{{$motherboard['socket']}}</h3>
            <h3>Tipo de memória RAM:{{$motherboard['memoryRam']}}</h3>
            <h3>Qnt. slots RAM:{{$motherboard['ramMemorySlots']}}</h3>
            <h3>TDP:{{$motherboard['maxTdp']}}</h3>
            <h3>Slots SATA:{{$motherboard['sataSlots']}}</h3>
            <h3>Slots M2:{{$motherboard['m2Slots']}}</h3>
            <h3>Slots PCI:{{$motherboard['pciSlots']}}</h3>
        </div>
    @endforeach

</div>
</body>
</html>
