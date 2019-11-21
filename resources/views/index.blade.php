@extends('layout.app')

@component('navbar')
    
@endcomponent

@section('conteudo')
    <br>
    <div class="container">
        <div class="jumbotron bg-light border ">
            <div class="row">
                <div class="card-deck">
                    {{-- Inicio bloco de cards --}}
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title"> Cadastro Produtos </h5>                  
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint, aliquid
                                    est animi eum, sapiente, dolor psam molestiae laborum perspiciatis minima ea
                                    voluptatum totam quia quod voluptatem! Ullam, nostrum obcaecati.
                                </p>
                                <a href="/produtos" class="btn btn-primary"> Cadastrar</a>
                            </div>
                        </div>

                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title"> Cadastro Produtos </h5>                  
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint, aliquid
                                    est animi eum, sapiente, dolor psam molestiae laborum perspiciatis minima ea
                                        voluptatum totam quia quod voluptatem! Ullam, nostrum obcaecati.
                                </p>
                                <a href="/produtos" class="btn btn-primary"> Cadastrar</a>
                            </div>
                        </div>

                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title"> Cadastro Produtos </h5>                  
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint, aliquid
                                    est animi eum, sapiente, dolor psam molestiae laborum perspiciatis minima ea
                                    voluptatum totam quia quod voluptatem! Ullam, nostrum obcaecati.
                                </p>
                                <a href="/produtos" class="btn btn-primary "> Cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection