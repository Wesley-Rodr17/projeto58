@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <form action="{{ route('modelos.store') }}" class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label>Modelo do veículo</label>
                    <input type="text" class="form-control" name="modelo">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Modelo do veículo</label>
                    <select name="status" id="" class="form-control">
                        <option value="ativo">Ativo</option>
                        <option value="inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <button type="subimit" class="btn btn-default">Cadastrar modelo</button>
            </div>
        </form>
    </div>
</div>


@endsection