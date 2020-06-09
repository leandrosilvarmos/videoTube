@extends('layouts.app')

@section('content')
<div class="header">


    <!-- Authentication Links -->
    @guest
    <a href="{{ route('register') }}"><i class="fas fa-video"></i> Criar Usuario</a>

    @if (Route::has('register'))
    <a href="{{ route('login') }}"><i class="fas fa-video"></i> Login</a>

    @endif
    @else
        <span>Bem vindo(a), {{ Auth::user()->name}}</span>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Sair') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endguest


</div>
@endsection
