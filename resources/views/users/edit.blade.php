@extends('layouts.app')
@section('title', 'Editando: ' . $user->name)
@section('content')


<div id="alunos-create-container" class="col-md-6 offset-md-3"> 
    <h1>Editando: {{ $user->name }}</h1> 
    <form action="/users/update/{{ $user->id }}" method="POST"> 
     @csrf
     @method('PUT')
        <div class="form-group"> 
            <label for="title">Nome: </label>
            <input type="text" class="form-control" id="title" name="name" placeholder="Nome do {{ $user->acesso }}" value="{{ $user->name }}">
        </div>
        <div class="form-group"> 
            <label for="title">Usuário: </label>
            <input type="text" class="form-control" id="title" name="usuario" placeholder="Usuário do {{ $user->acesso }}" value="{{ $user->usuario }}">
        </div> 
        <div class="form-group"> 
            <label for="title">CPF: </label>
            <input type="text" class="form-control" id="title" name="cpf" placeholder="CPF do {{ $user->acesso }}" value="{{ $user->cpf }}">
        </div> 
        <div class="form-group"> 
            <label for="title">Endereço: </label>
            <input type="text" class="form-control" id="title" name="endereco" placeholder="Endereço do {{ $user->acesso }}" value="{{ $user->endereco }}">
        </div> 
        <input type="submit" class="btn btn-primary" value="Editar {{ $user->acesso }}">
    </form>
</div> 

@endsection



    

            
                
        
                   
                        
                        
        