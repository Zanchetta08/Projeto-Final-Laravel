@extends('layouts.app')
@section('title', 'X6 Dev')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div id="search-container" class="col-md-12">
    <h1>Busque um Usuário</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Todos os Usuários</h2>
    @endif
    <div id="cards-container" class="row">
        @foreach($users as $user)
            <div class="card col-md-2">
                <img src="/img/avatares/{{$user->image}}.png" alt="{{ $user->name }}">
                <div class="card-body">
                    <h5 class="card-nome">{{ $user->name }}</h5>
                </div>
                <div><a href="/users/{{ $user->id }}" class="btn btn-primary">Saber mais</a></div>
            </div>
        @endforeach
    </div>
</div>
@if(!$search)
<div class="d-flex justify-content-center">
    {{$users->links()}}
</div>
@endif

@endsection
