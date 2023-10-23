<x-layout title="Series">
    <a href="/series/create">Adicionar nova série</a>



    <ul>
   @foreach($series as $serie)
        <li>{{$serie}}</li>
        @endforeach
    </ul>
{{--

@{{ nome }} --> isso faz com que eu possa passar constantes por exemplo de um framework front-end e fazer sua integração.

--}}

    <script>
        //Para transformar uma chamada de dados em json posso fazer isso desta forma

        const series = {{Js::from($series)}};//pega o resultado de uma variavel no php e a transforma em json e passa para a constante do js

    </script>
</x-layout>
