@extends('layouts.app')
@section('content')
<div class="header"> Museu !!

    <a href="{{route('videos.create')}}"><i class="fas fa-video"></i> Criar Video</a>

</div>
<div class="info">
    <div>

    </div>



    @foreach($videos as $video)

<div>
    <div class="videoContainer" data-src="{{asset('storage/' .$video->video)}}">
        <p> Nome do video: {{$video->titulo}} /  Autor: {{$video->autor}}</p>
        <p> Duração: {{$video->duracao}}</p>
        <p> Descrição: {{$video->descricao}}</p>
</div>

</div>

    @endforeach


    <script src="{{asset('js/script.js')}}"></script>


</div>
@endsection
