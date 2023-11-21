<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Montar máquinas</h1>

<h1>Placas-mãe</h1>
<div class="container placamae">
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

<h1>Processadores</h1>
    <div class="container processador">
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
