
{{-- navbar simples bootstrap 4 --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a @if ( $current == "home") class="nav-item nav-link active" @else class="nav-item nav-link" @endif  href="/">Home <span class="sr-only">(Página atual)</span></a>
        <a @if ( $current == "produtos") class="nav-item nav-link active" @else class="nav-item nav-link" @endif href="/produtos">Produtos</a>
        <a @if ( $current == "categorias") class="nav-item nav-link active" @else class="nav-item nav-link" @endif href="/categorias">Categorias</a>
        <a class="nav-item nav-link disabled" href="#">Desativado</a>
        </div>
    </div>
</nav>

{{-- class="nav-item nav-link active"  --}}