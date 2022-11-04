@extends('layouts.app')
@section('title', $user->name)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/materia.png" class="img-fluid" alt="{{ $user->name }}">
        </div>
        <div id="info-container" class="col-md-6">
            @if($user->acesso == 'Professor')
                <h1><ion-icon name="stats-chart-outline"></ion-icon>{{$user->acesso}}:</h1>
            @else 
                <h1><ion-icon name="school-outline"></ion-icon>{{$user->acesso}}:</h1>
            @endif
            <p>{{ $user->name }}</p>
            <h1><ion-icon name="happy-outline"></ion-icon>Usuário:</h1>
            <p>{{ $user->usuario }}</p>
            <h1><ion-icon name="alert-circle-outline"></ion-icon>CPF:</h1>
            <p>{{ $user->cpf }}</p>
            <h1><ion-icon name="trail-sign-outline"></ion-icon>Endereço:</h1>
            <p>{{ $user->endereco }}</p>
            <a href="/users/edit/{{ $user->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar:</a>
            <form action="/users/{{ $user->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
            </form>
        </div>
    </div>
</div>

@endsection



