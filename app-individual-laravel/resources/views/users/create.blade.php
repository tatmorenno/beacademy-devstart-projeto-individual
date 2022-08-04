@extends('template.users')
@section('title', 'Novo Usuário')
@section('body')
  <h1>Novo Usuário</h1>
  @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
          {{ $error }}<br>
        @endforeach
    </div>
  @endif
  <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome" placeholder="Digite o seu nome">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu email">
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Digite a sua senha">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection