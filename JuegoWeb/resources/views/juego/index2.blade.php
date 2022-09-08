@extends('layouts.app')

@section('title', 'Sala de juego')

@section('content')
    <nav class="nav d-flex justify-content-around">
        <li class="nav-item text-white my-2">
            <h4>TIEMPO DE JUEGO <span>1:00:00</span></h4>
        </li>
        <li class="nav-item my-3 text-center">
            <form method="post" action="{{ url('/iniciar-juego') }}" class="my-2">
                @csrf
                <input type="hidden" name="codigo" value="{{$codigo}}">
                <button type="submit" class="btn btn-secondary">INICIAR JUEGO</button>
            </form>
            <div class="my-2">
                <button type="submit my-2" class="btn btn-success" onclick = "sig_ronda()">EJECUTAR SIG RONDA</button>
            </div>
        </li>
        <li class="nav-item text-white my-3">
            <h4>CODIGO DE SALA: <span>{{$codigo}}</span></h4>
        </li>
    </nav>
    <section class="vh-100 gradient-custom">
        <div class="container py-3">
            <div class="row d-flex justify-content-around">
                <div class="col-3">
                    {{-- jugador1 --}}
                    @isset($jugadores[0])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[0]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten jugadores --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                <h4>Total jugadores: {{$jugadores[0]->cant}}</h4>
                                <h4>{{$jugadores[0]->numero}}{{$jugadores[0]->paquete}}</h4>
                            </div>
                            <div class="card-header">
                                <img id="img1" src="" alt="..." class="img-thumbnail" width="80px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais1" data-pais="{{$jugadores[0]->nombre}}">{{$jugadores[0]->nombre}}</h5>
                                <p class="card-text">Población: <span id="poblacion1" class="text-bold"></span> </p>
                                <p class="card-text">Area: <span id="area1"></span></p>
                            </div>
                        </div>
                    @endisset
                    {{-- jugador3 --}}
                    @isset($jugadores[2])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[2]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten jugadores --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                <h4>Total jugadores: {{$jugadores[2]->cant}}</h4>
                                <h4>{{$jugadores[2]->numero}}{{$jugadores[2]->paquete}}</h4>
                            </div>
                            <div class="card-header">
                                <img id="img3" src="" alt="..." class="img-thumbnail" width="80px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais3" data-pais="{{$jugadores[2]->nombre}}">{{$jugadores[2]->nombre}}</h5>
                                <p class="card-text">Población: <span id="poblacion3" class="text-bold"></span> </p>
                                <p class="card-text">Area: <span id="area3"></span></p>
                            </div>
                        </div>
                    @endisset
                    {{-- jugador5 --}}
                    @isset($jugadores[4])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[4]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten jugadores --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                <h4>Total jugadores: {{$jugadores[4]->cant}}</h4>
                                <h4>{{$jugadores[4]->numero}}{{$jugadores[4]->paquete}}</h4>
                            </div>
                            <div class="card-header">
                                <img id="img5" src="" alt="..." class="img-thumbnail" width="80px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais5" data-pais="{{$jugadores[4]->nombre}}">{{$jugadores[4]->nombre}}</h5>
                                <p class="card-text">Población: <span id="poblacion5" class="text-bold"></span> </p>
                                <p class="card-text">Area: <span id="area5"></span></p>
                            </div>
                        </div>
                    @endisset

                </div>
                <div class="justify-content-center">
                    <h1 id="ganador"></h1>
                </div>
                <div class="col-3">
                    {{-- jugador2 --}}
                    @isset($jugadores[1])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[1]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten jugadores --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                <h4>Total jugadores: {{$jugadores[1]->cant}}</h4>
                                <h4>{{$jugadores[1]->numero}}{{$jugadores[1]->paquete}}</h4>
                            </div>
                            <div class="card-header">
                                <img id="img2" src="" alt="..." class="img-thumbnail" width="80px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais2" data-pais="{{$jugadores[1]->nombre}}">{{$jugadores[1]->nombre}}</h5>
                                <p class="card-text">Población: <span id="poblacion2" class="text-bold"></span> </p>
                                <p class="card-text">Area: <span id="area2"></span></p>
                            </div>
                        </div>
                    @endisset

                    {{-- jugador4 --}}
                    @isset($jugadores[3])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[3]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten jugadores --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                <h4>Total jugadores: {{$jugadores[3]->cant}}</h4>
                                <h4>{{$jugadores[3]->numero}}{{$jugadores[3]->paquete}}</h4>
                            </div>
                            <div class="card-header">
                                <img id="img4" src="" alt="..." class="img-thumbnail" width="80px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais4" data-pais="{{$jugadores[3]->nombre}}">{{$jugadores[3]->nombre}}</h5>
                                <p class="card-text">Población: <span id="poblacion4" class="text-bold"></span> </p>
                                <p class="card-text">Area: <span id="area4"></span></p>
                            </div>
                        </div>
                    @endisset

                    {{-- jugador6 --}}
                    @isset($jugadores[5])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[5]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten jugadores --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                <h4>Total jugadores: {{$jugadores[5]->cant}}</h4>
                                <h4>{{$jugadores[5]->numero}}{{$jugadores[5]->paquete}}</h4>
                            </div>
                            <div class="card-header">
                                <img id="img5" src="" alt="..." class="img-thumbnail" width="80px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais5" data-pais="{{$jugadores[5]->nombre}}">{{$jugadores[5]->nombre}}</h5>
                                <p class="card-text">Población: <span id="poblacion5" class="text-bold"></span> </p>
                                <p class="card-text">Area: <span id="area5"></span></p>
                            </div>
                        </div>
                    @endisset

                    {{-- jugador7 --}}
                    @isset($jugadores[6])
                        <div class="d-flex justify-content-center">
                            <h4 class="mx-auto">{{$jugadores[6]->nombre_jugador}}</h4>
                        </div>
                        {{-- condicionar si exiten jugadores --}}
                        <div class="card mb-2">
                            <div class="card-header">
                                <h4>Total jugadores: {{$jugadores[6]->cant}}</h4>
                                <h4>{{$jugadores[6]->numero}}{{$jugadores[6]->paquete}}</h4>
                            </div>
                            <div class="card-header">
                                <img id="img7" src="" alt="..." class="img-thumbnail" width="80px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" id="pais7" data-pais="{{$jugadores[6]->nombre}}">{{$jugadores[6]->nombre}}</h5>
                                <p class="card-text">Población: <span id="poblacion7" class="text-bold"></span> </p>
                                <p class="card-text">Area: <span id="area7"></span></p>
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
    <script src="http://127.0.0.1:8000/js/juego.js"></script>
@endsection
