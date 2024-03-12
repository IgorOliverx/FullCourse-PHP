<x-layout title="Series">

    <a href="/series/criar">Adicionar Série</a>
<ul>
    @foreach($series as $serie)
        <li>{{$serie}}</li>
    @endforeach
</ul>

    <script>
        //Fazendo assim eu consigo gerar o dado dinâmico nessa view com métodos de manipulações mais fáceis
        //E passar para o servidor front em formato de json para ele consumir e não mais cuidar da logica de manipulação
        //Isso pode ser eficiente em alguns casos
        const series = {{\Illuminate\Support\Js::from($series)}}
    </script>

</x-layout>
