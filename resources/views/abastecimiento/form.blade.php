<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_abastecimiento" class="form-label">{{ __('Id Abastecimiento') }}</label>
            <input type="text" name="id_abastecimiento" class="form-control @error('id_abastecimiento') is-invalid @enderror" value="{{ old('id_abastecimiento', $abastecimiento?->id_abastecimiento) }}" id="id_abastecimiento" placeholder="Id Abastecimiento">
            {!! $errors->first('id_abastecimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_proveedor" class="form-label">{{ __('Id Proveedor') }}</label>
            <input type="text" name="id_proveedor" class="form-control @error('id_proveedor') is-invalid @enderror" value="{{ old('id_proveedor', $abastecimiento?->id_proveedor) }}" id="id_proveedor" placeholder="Id Proveedor">
            {!! $errors->first('id_proveedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_fabricante" class="form-label">{{ __('Id Fabricante') }}</label>
            <input type="text" name="id_fabricante" class="form-control @error('id_fabricante') is-invalid @enderror" value="{{ old('id_fabricante', $abastecimiento?->id_fabricante) }}" id="id_fabricante" placeholder="Id Fabricante">
            {!! $errors->first('id_fabricante', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_combustible" class="form-label">{{ __('Id Combustible') }}</label>
            <input type="text" name="id_combustible" class="form-control @error('id_combustible') is-invalid @enderror" value="{{ old('id_combustible', $abastecimiento?->id_combustible) }}" id="id_combustible" placeholder="Id Combustible">
            {!! $errors->first('id_combustible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $abastecimiento?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_abastecimiento" class="form-label">{{ __('Fecha Abastecimiento') }}</label>
            <input type="text" name="fecha_abastecimiento" class="form-control @error('fecha_abastecimiento') is-invalid @enderror" value="{{ old('fecha_abastecimiento', $abastecimiento?->fecha_abastecimiento) }}" id="fecha_abastecimiento" placeholder="Fecha Abastecimiento">
            {!! $errors->first('fecha_abastecimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>