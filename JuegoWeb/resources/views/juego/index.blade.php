@extends('layouts.app')

@section('title', 'Sala de juego')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-between">
                <div class="card col-md-3" style="width: 15rem;">
                    <h5 class="card-title">Nombre Jugador</h5>
                    <img src="." class="card-img-top mb-3" alt="..." id="img1" height="30%">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">Población: </li>
                        <li class="list-group-item col" id="poblacion1"></li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">Area: </li>
                        <li class="list-group-item col" id="area1"></li>
                    </ul>
                </div>
                <div class="card col-md-3" style="width: 15rem;">
                    <h5 class="card-title">Nombre Jugador</h5>
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="card col-md-3" style="width: 15rem;">
                    <h5 class="card-title">Nombre Jugador</h5>
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-md-3" style="width: 15rem;">
                    <h5 class="card-title">Nombre Jugador</h5>
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="card col-md-3" style="width: 15rem;">
                    <h5 class="card-title">Nombre Jugador</h5>
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-md-3" style="width: 15rem;">
                    <h5 class="card-title">Nombre Jugador</h5>
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
