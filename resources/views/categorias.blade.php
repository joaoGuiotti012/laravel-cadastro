@extends('layout.app', ["current" => "categorias"])


@section('conteudo')
<br>
<div class="container">
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>nome</th>
                        <th>Ações</th>
                    </tr>
                    <tbody>
                        @foreach ($cats as $cat)
                            <tr>
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
        </div>
    </div>
</div>
@endsection