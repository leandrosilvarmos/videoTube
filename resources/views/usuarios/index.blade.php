@extends('layouts.app')
@section('content')
<script>
    function salvarForm(){
  if (localStorage.cont) {
     localStorage.cont = Number(localStorage.cont)+1;
  } else {
     localStorage.cont = 1;
  }

  cad = document.getElementById('nome').value + ';' + document.getElementById('sobrenome').value
  + ';' + document.getElementById('email').value + ';' + document.getElementById('telefone').value;
  localStorage.setItem("Cadastro de usuario N:"+localStorage.cont,cad);
}
</script>



<div class="header"> Usuarios </div>
<div class="info">
    <div>
        <form action="" class="form-style-6">
            <div>
                <input type="text" id="nome" placeholder="nome" required/>
                <input type="text" id="sobrenome" placeholder="Sobrenome" />
            </div>
            <div>
                <input type="text" id="email" placeholder="email" required />
                <input type="text" id="telefone" placeholder="telefone" />
            </div>
            <button type="submit" onclick="salvarForm()"> Enviar</button>
        </form>

    </div>


</div>
@endsection
