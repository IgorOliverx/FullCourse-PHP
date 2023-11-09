
<x-layout title="Series">
    <a href="/series/create" class="btn btn-dark mb-2">Adicionar nova série</a>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <ul class="list-group">
   @foreach($series as $serie)
        <li class="list-group-item">{{$serie -> nome}}</li>
       {{$serie -> nome}}
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
