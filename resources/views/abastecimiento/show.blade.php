@extends('layouts.app')

@section('template_title')
    {{ $abastecimiento->name ?? __('Show') . " " . __('Abastecimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Abastecimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('abastecimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Abastecimiento:</strong>
                                    {{ $abastecimiento->id_abastecimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Proveedor:</strong>
                                    {{ $abastecimiento->id_proveedor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Fabricante:</strong>
                                    {{ $abastecimiento->id_fabricante }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Combustible:</strong>
                                    {{ $abastecimiento->id_combustible }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $abastecimiento->cantidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Abastecimiento:</strong>
                                    {{ $abastecimiento->fecha_abastecimiento }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
