@extends('layouts.app')

@section('title', '')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-3 mt-md-3 pb-4">
                            <section>
                                <div class="mb-4">
                                    <h2>Match Battle</h2>
                                    <h6>Para crear una sala</h6>
                                </div>
                                <form method="post" action="{{ url('/crear-sala') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nombre">Nombre Jugador</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingresa tu nombre">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Crear sala</button>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('scripts')
    {{-- scripts --}}
@endsection
