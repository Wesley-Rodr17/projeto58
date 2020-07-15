@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Modelo</th>
      <th scope="col">Status</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>

  <tbody>
  @foreach($modelos as $modelo)
    <tr>
      <th scope="row">{{$modelo->id}}</th>
      <td>{{$modelo->modelo}}</td>
      <td>{{$modelo->status}}</td>
      <td>
            <a href="{{ route('modelos.show', $modelo->id) }}">Visualizar</a>
            <a href="#">Editar</a>
            <a href="#">Apagar</a>
        </td>
    </tr>
    @endforeach
  </tbody>
    </div>
</div>

@endsection