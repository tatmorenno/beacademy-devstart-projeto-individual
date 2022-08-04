@extends('template.users')
@section('title', "Usuário {$user->name}")
@section('body')

  <h1>Usuário {{$user->name}}</h1>

  @if($errors->any())
      <div class="alert alert-danger" role="alert">
          @foreach($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
      </div>
    @endif

<form action="{{ route('users.update', $user->id) }}" method="post">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="Digite o seu nome">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Digite o seu email">
  </div>
  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Digite a sua senha">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection