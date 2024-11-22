<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_envio" class="form-label">{{ __('Id Envio') }}</label>
            <input type="text" name="id_envio" class="form-control @error('id_envio') is-invalid @enderror" value="{{ old('id_envio', $envio?->id_envio) }}" id="id_envio" placeholder="Id Envio">
            {!! $errors->first('id_envio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_abastecimiento" class="form-label">{{ __('Id Abastecimiento') }}</label>
            <input type="text" name="id_abastecimiento" class="form-control @error('id_abastecimiento') is-invalid @enderror" value="{{ old('id_abastecimiento', $envio?->id_abastecimiento) }}" id="id_abastecimiento" placeholder="Id Abastecimiento">
            {!! $errors->first('id_abastecimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_naviera" class="form-label">{{ __('Id Naviera') }}</label>
            <input type="text" name="id_naviera" class="form-control @error('id_naviera') is-invalid @enderror" value="{{ old('id_naviera', $envio?->id_naviera) }}" id="id_naviera" placeholder="Id Naviera">
            {!! $errors->first('id_naviera', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_envio" class="form-label">{{ __('Fecha Envio') }}</label>
            <input type="text" name="fecha_envio" class="form-control @error('fecha_envio') is-invalid @enderror" value="{{ old('fecha_envio', $envio?->fecha_envio) }}" id="fecha_envio" placeholder="Fecha Envio">
            {!! $errors->first('fecha_envio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_enviada" class="form-label">{{ __('Cantidad Enviada') }}</label>
            <input type="text" name="cantidad_enviada" class="form-control @error('cantidad_enviada') is-invalid @enderror" value="{{ old('cantidad_enviada', $envio?->cantidad_enviada) }}" id="cantidad_enviada" placeholder="Cantidad Enviada">
            {!! $errors->first('cantidad_enviada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>