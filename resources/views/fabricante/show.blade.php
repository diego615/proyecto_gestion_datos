@extends('layouts.app')

@section('template_title')
    {{ $fabricante->name ?? __('Show') . " " . __('Fabricante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fabricante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('fabricantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Fabricante:</strong>
                                    {{ $fabricante->id_fabricante }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $fabricante->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contacto:</strong>
                                    {{ $fabricante->contacto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ubicacion:</strong>
                                    {{ $fabricante->ubicacion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
