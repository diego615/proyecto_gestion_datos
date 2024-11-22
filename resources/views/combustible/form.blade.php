<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_combustible" class="form-label">{{ __('Id Combustible') }}</label>
            <input type="text" name="id_combustible" class="form-control @error('id_combustible') is-invalid @enderror" value="{{ old('id_combustible', $combustible?->id_combustible) }}" id="id_combustible" placeholder="Id Combustible">
            {!! $errors->first('id_combustible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_combustible" class="form-label">{{ __('Tipo Combustible') }}</label>
            <input type="text" name="tipo_combustible" class="form-control @error('tipo_combustible') is-invalid @enderror" value="{{ old('tipo_combustible', $combustible?->tipo_combustible) }}" id="tipo_combustible" placeholder="Tipo Combustible">
            {!! $errors->first('tipo_combustible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $combustible?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ecologico" class="form-label">{{ __('Ecologico') }}</label>
            <input type="text" name="ecologico" class="form-control @error('ecologico') is-invalid @enderror" value="{{ old('ecologico', $combustible?->ecologico) }}" id="ecologico" placeholder="Ecologico">
            {!! $errors->first('ecologico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>