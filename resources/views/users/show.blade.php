@extends('layouts.app')
@section('title', Auth::user()->name)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/avatares/{{ Auth::user()->image }}.png" class="img-fluid" alt="{{ Auth::user()->name }}">
        </div>
        <div id="info-container" class="col-md-6">
            @if(Auth::user()->acesso == 'Professor')             
                <h1><ion-icon name="stats-chart-outline"></ion-icon>{{Auth::user()->acesso}}:</h1>
            @else 
                <h1><ion-icon name="school-outline"></ion-icon>{{Auth::user()->acesso}}:</h1>
            @endif
                <p>{{ Auth::user()->name }}</p>
            <h1><ion-icon name="happy-outline"></ion-icon>Usuário:</h1>
                <p>{{ Auth::user()->usuario }}</p>
            <h1><ion-icon name="alert-circle-outline"></ion-icon>CPF:</h1>
                <p>{{ Auth::user()->cpf }}</p>
            <h1><ion-icon name="trail-sign-outline"></ion-icon>Endereço:</h1>
                <p>{{ Auth::user()->endereco }}</p>
            <a href="/users/edit/{{ Auth::user()->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar:</a>
            <form action="/users/{{ Auth::user()->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
            </form>
        </div>
    </div>
</div>

@endsection



