@extends('template.users')
@section('title', $title)
@section('body')
      <h1>Usuári@ {{$user->name}}</h1>
      <table class="table table-dark table-hover">
        <thead class="text-center">
          <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Data de Cadastro</th>
          <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody class="text-center">
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
              <td>
                  <a href="" class="btn btn-warning text-white">Editar</a>
                  <a href="" class="btn btn-danger text-white">Excluir</a>
              </td>
            </tr>
        </tbody>
      </table>
@endsection