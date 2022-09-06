@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-2 mt-md-3 pb-4">
                            <section>
                                <div class="mb-4">
                                    <h2>Match Battle</h2>
                                    <h6>Para comenzar selecciona</h6>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <a type="button" href="/crear" class="btn btn-primary btn-lg"><h5>Crear una sala nueva</h5></a>
                                    </div>
                                    <div class="col-6">
                                        <a type="button" href="/ingresar" class="btn btn-secondary btn-lg"><h5>Ingresar a una sala</h5></a>
                                    </div>
                                </div>
                            </section>
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
@endsection
