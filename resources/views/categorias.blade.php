@extends('layout.app', ["current" => "categorias"])


@section('conteudo')
<br>
<div class="container">
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
@if ( count($cats) > 0)
            <table class="table table-ordered table-hover table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    <tbody>
                        @foreach ($cats as $cat)
                            <tr class="text-center">
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->nome }}</td>
                                <td> 
                                    <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
@endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn  btn-success" role="button"> Nova  <i class="fas fa-plus-square"> </i> </a>
        </div>
    </div>
</div>
@endsection