@extends('layouts.app')
@section('content')
<div class="header"> Cadastro de Video </div>
<form class="form-style-6" method="POST" enctype="multipart/form-data" action="{{route('videos.store')}}">
    @csrf
    <div>
        <input type="text" name="nome" placeholder="Nome do Video" />
        <input type="text" name="titulo" placeholder="Titulo" />
    </div>
    <div>
        <input type="text" name="autor" placeholder="Autor" />
        <input type="text" name="duracao" placeholder="Duração" />
    </div>

    <div>
    </div>
    <div>
        <textarea id="" cols="30" rows="6" name="descricao"></textarea>
        <input type="file" name="video"/>
    </div>
    <button type="submit"> Cadastrar</button>
</form>
@endsection
