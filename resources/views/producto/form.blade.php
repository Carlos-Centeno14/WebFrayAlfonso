<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $producto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $producto->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutaImg') }}
            {{ Form::file('RutaImg', ['class' => 'form-control' . ($errors->has('RutaImg') ? ' is-invalid' : '')]) }}
            @if ($producto->RutaImg)
                <div>
                    <img src="{{ asset($producto->RutaImg) }}" alt="Producto Image" style="max-width: 100px; max-height: 100px;">
                </div>
            @endif
            {!! $errors->first('RutaImg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('RutaImg') }}
            {{ Form::file('RutaImg', $producto->RutaImg, ['class' => 'form-control' . ($errors->has('RutaImg') ? ' is-invalid' : ''), 'placeholder' => 'Rutaimg']) }}
            {!! $errors->first('RutaImg', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
