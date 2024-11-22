@extends('layouts.app')

@section('template_title')
    {{ $combustible->name ?? __('Show') . " " . __('Combustible') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Combustible</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('combustibles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Combustible:</strong>
                                    {{ $combustible->id_combustible }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Combustible:</strong>
                                    {{ $combustible->tipo_combustible }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $combustible->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ecologico:</strong>
                                    {{ $combustible->ecologico }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
