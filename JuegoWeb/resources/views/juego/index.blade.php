@extends('layouts.app')

@section('title', 'Sala de juego')

@section('content')
    <nav class="nav d-flex justify-content-around">
        <li class="nav-item">
            <button class="btn btn-success my-2">INICIAR JUEGO</button>
        </li>
        <li class="nav-item">
            <h4>TIEMPO DE JUEGO</h4>
            <h4>1:00:00</h4>
        </li>
    </nav>
    <section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-around">
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <h4 class="mx-auto">jugador</h4>
                    </div>
                    {{-- condicionar si exiten cartas --}}
                    {{-- @if ()

                    @endif --}}
                    <div class="card mb-2">
                        <div class="card-header">
                            A1
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="nombre">Colombia</h5>
                            <p class="card-text" id="poblacion">Población: <span></span> </p>
                            <p class="card-text" id="area">Area: <span></span> </p>
                        </div>
                    </div>
                </div>
                <div class="justify-content-center">
                    <h1 id="ganador">GANADOR</h1>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center">
                        <h4>jugador</h4>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header">
                            A1
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" id="nombre">Colombia</h5>
                            <p class="card-text" id="poblacion">Población: <span></span> </p>
                            <p class="card-text" id="area">Area: <span></span> </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection



@section('scripts')
    {{-- scripts --}}
    <script src="js/juego.js"></script>
@endsection
