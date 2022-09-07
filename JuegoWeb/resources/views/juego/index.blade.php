@extends('layouts.app')

@section('title', 'Sala de juego')

@section('content')
    <nav class="nav d-flex justify-content-around">
        <li class="nav-item">
            <form method="post" action="{{ url('/iniciar-juego') }}">
                @csrf
                <input type="hidden" name="codigo" value="{{$codigo}}">
                <button type="submit" class="btn btn-success my-2">INICIAR JUEGO</button>
            </form>
        </li>
        <li class="nav-item">
            <h4>TIEMPO DE JUEGO <span>1:00:00</span></h4>
        </li>
    </nav>
    <section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-around">
                <div class="col-3">
                    {{-- jugador1 --}}
                    @isset($jugadores[0])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[0]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten cartas --}}
                        {{-- @if ()

                        @endif --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                A1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais1">{{}}</h5>
                                <p class="card-text">Población: <span></span> </p>
                                <p class="card-text">Area: <span></span> </p>
                            </div>
                        </div>
                    @endisset
                    {{-- jugador2 --}}
                    @isset($jugadores[2])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[2]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten cartas --}}
                        {{-- @if ()

                        @endif --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                A1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais2">Colombia</h5>
                                <p class="card-text">Población: <span></span> </p>
                                <p class="card-text">Area: <span></span> </p>
                            </div>
                        </div>
                    @endisset
                    {{-- jugador3 --}}
                    @isset($jugadores[4])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[4]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten cartas --}}
                        {{-- @if ()

                        @endif --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                A1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais3">Colombia</h5>
                                <p class="card-text">Población: <span></span> </p>
                                <p class="card-text">Area: <span></span> </p>
                            </div>
                        </div>
                    @endisset

                </div>
                <div class="justify-content-center">
                    <h1 id="ganador"></h1>
                </div>
                <div class="col-3">
                    {{-- jugador4 --}}
                    @isset($jugadores[1])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[1]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten cartas --}}
                        {{-- @if ()

                        @endif --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                A1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais4">Colombia</h5>
                                <p class="card-text">Población: <span></span> </p>
                                <p class="card-text">Area: <span></span> </p>
                            </div>
                        </div>
                    @endisset

                    {{-- jugador5 --}}
                    @isset($jugadores[3])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[3]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten cartas --}}
                        {{-- @if ()

                        @endif --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                A1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais5">Colombia</h5>
                                <p class="card-text">Población: <span></span> </p>
                                <p class="card-text">Area: <span></span> </p>
                            </div>
                        </div>
                    @endisset

                    {{-- jugador6 --}}
                    @isset($jugadores[5])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[5]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten cartas --}}
                        {{-- @if ()

                        @endif --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                A1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais6">Colombia</h5>
                                <p class="card-text">Población: <span></span> </p>
                                <p class="card-text">Area: <span></span> </p>
                            </div>
                        </div>
                    @endisset

                    {{-- jugador7 --}}
                    @isset($jugadores[6])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[6]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten cartas --}}
                        {{-- @if ()

                        @endif --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                A1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais7">Colombia</h5>
                                <p class="card-text">Población: <span></span> </p>
                                <p class="card-text">Area: <span></span> </p>
                            </div>
                        </div>
                    @endisset
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
