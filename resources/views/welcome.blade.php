@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<div class="header"> Bem vindo !! </div>
<div class="info">
    <div>

        <h2> Museo - Grupo IV </h2>

        <hr>

        <p> Nosso projeto consiste em disponibilizar videos pro usuarios, onde ele pode ter pleno controle
            do video que esta assistindo. Tais como iniciar, pausar, adiantar, acelear e voltar os videos.
        </p>
    </div>
    <div>
        <h2> Usabilidade</h2>
        <hr>
        <p> Para fazer uso do nosso projeto, voce como usuario deve realizar um cadastro simples, contendo
            suas informações
            tais como, nome, email , telefone é após isso voce vai precisar cadastrar um video, que sera
            disponibilizado dentro da sessão de museo.
            <p>
                Esse cadastro é realizado usando a funcionalidade do propio browser, o WebStorage, o qual os
                dados ficando gravado na sua sessão do browser, é somente voce como usuario tem acesso ao seus dados.
            </p>
        </p>

    </div>

    <div>
        <h2> Videos do Museo </h2>
        <hr>
        <p>Para cadastrar videos em nosso museo e preciso algumas informaçoes basicas, tais como:
            <p>
                - Nome do Video / - Autor / - Duração /  - Arquivo do Video. <b> Recomendações:</b> Cadastrar videos de no maximo 1Min de duração, para que o nosso museo publico
                não,
                fique sobrecarregado, para os demais usuarios.
            </p>
        </p>

    </div>


</div>
@endsection
