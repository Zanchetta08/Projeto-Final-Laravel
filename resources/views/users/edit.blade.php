@extends('layouts.app')
@section('title', 'Editando: ' . Auth::user()->name)
@section('content')


<div id="alunos-create-container" class="col-md-6 offset-md-3"> 
    <h1>Editando: {{ Auth::user()->name }}</h1> 
    <form action="/users/update/{{ Auth::user()->id }}" method="POST"> 
     @csrf
     @method('PUT')
        <div class="form-group"> 
            <label for="title">Nome: </label>
            <input type="text" class="form-control" id="title" name="name" placeholder="Nome do {{ Auth::user()->acesso }}" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group"> 
            <label for="title">Usuário: </label>
            <input type="text" class="form-control" id="title" name="usuario" placeholder="Usuário do {{ Auth::user()->acesso }}" value="{{ Auth::user()->usuario }}">
        </div> 
        <div class="form-group"> 
            <label for="title">CPF: </label>
            <input type="text" class="form-control" id="title" name="cpf" placeholder="CPF do {{ Auth::user()->acesso }}" value="{{ Auth::user()->cpf }}">
        </div> 
        <div class="form-group"> 
            <label for="title">Endereço: </label>
            <input type="text" class="form-control" id="title" name="endereco" placeholder="Endereço do {{ Auth::user()->acesso }}" value="{{ Auth::user()->endereco }}">
        </div>
        @if(Auth::user()->acesso == 'Professor')
        <div class="form-group"> 
            <label for="title">Avatar: </label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar1">
                    <img src="/img/avatares/avatar1.png" class="avatar">         
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar2"> 
                    <img src="/img/avatares/avatar2.png" class="avatar">           
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar3">   
                    <img src="/img/avatares/avatar3.png" class="avatar">         
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar4">  
                    <img src="/img/avatares/avatar4.png" class="avatar">          
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar5">  
                    <img src="/img/avatares/avatar5.png" class="avatar">          
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar6">  
                    <img src="/img/avatares/avatar6.png" class="avatar">          
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar7"> 
                    <img src="/img/avatares/avatar7.png" class="avatar">           
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar8">  
                    <img src="/img/avatares/avatar8.png" class="avatar">          
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar9">  
                    <img src="/img/avatares/avatar9.png" class="avatar">          
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar10">
                    <img src="/img/avatares/avatar10.png" class="avatar">            
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar11"> 
                    <img src="/img/avatares/avatar11.png" class="avatar">           
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar12"> 
                    <img src="/img/avatares/avatar12.png" class="avatar">           
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar13">   
                    <img src="/img/avatares/avatar13.png" class="avatar">         
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar14"> 
                    <img src="/img/avatares/avatar14.png" class="avatar">           
                    <label class="form-check-label" for="radio"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="image" name="image" value="avatar15"> 
                    <img src="/img/avatares/avatar15.png" class="avatar">           
                    <label class="form-check-label" for="radio"></label>
                </div>
            </div> 
        @endif
        <input type="submit" class="btn btn-primary" value="Editar {{ Auth::user()->acesso }}">
    </form>
</div> 

@endsection



    

            
                
        
                   
                        
                        
        