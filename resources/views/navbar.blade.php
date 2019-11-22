
{{-- navbar simples bootstrap 4 --}}

<style>
    .active{
        border-bottom: #ffc107 2px solid;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        {{-- <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> --}}
        <h2>
            <i class="fab fa-laravel text-danger"></i>
            <i class="fab fa-js-square text-warning"></i>
            <i class="fab fa-php text-primary"></i>
        </h2>
        {{-- Bootstrap --}}
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav teste">
            <a @if ( $current == "home") class="nav-item nav-link active" @else class="nav-item nav-link" @endif  href="/">Home <span class="sr-only">(Página atual)</span></a>
            <a @if ( $current == "produtos") class="nav-item nav-link active" @else class="nav-item nav-link" @endif href="/produtos">Produtos</a>
            <a @if ( $current == "categorias") class="nav-item nav-link active" @else class="nav-item nav-link" @endif href="/categorias">Categorias</a>
            <a class="nav-item nav-link disabled" href="#">Desativado</a>
        </div>
    </div>
   
    <ul class="navbar-nav ml-auto" >
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>

{{-- class="nav-item nav-link active"  --}}