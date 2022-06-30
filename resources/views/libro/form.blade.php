<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('categorias_id') }}
            {{ Form::select('categorias_id',$categorias,$libro->categorias_id, ['class' => 'form-control' . ($errors->has('categorias_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('categorias_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $libro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>